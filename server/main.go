package main

import (
	"database/sql"
	"encoding/json"
	"fmt"
	"io"
	"log"
	"net/http"
	"os"
	"strconv"

	_ "github.com/go-sql-driver/mysql"
)

type Event struct {
	Title       string  `json:"title"`
	Date        string  `json:"date"`
	Time        string  `json:"time"`
	Image       string  `json:"image"`
	Description string  `json:"description"`
	Fee         float64 `json:"fee"`
	Status      string  `json:"status"`
}

var db *sql.DB

func main() {
	var err error
	db, err = sql.Open("mysql", "root:@tcp(127.0.0.1:3306)/rumahAkasha")
	if err != nil {
		log.Fatal(err)
	}
	defer db.Close()

	// Function Owner & Staff
	http.HandleFunc("/api/create-event", createEvent)
	http.HandleFunc("/api/edit-event", editEvent)
	http.HandleFunc("/api/delete-event", delEvent)

	log.Fatal(http.ListenAndServe(":8080", nil))
}

func createEvent(w http.ResponseWriter, r *http.Request) {
	if r.Method != "POST" {
		http.Error(w, "Method not allowed !", http.StatusMethodNotAllowed)
		return
	}
	err := r.ParseMultipartForm(10 << 20)
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}

	var event Event
	event.Title = r.FormValue("title")
	event.Date = r.FormValue("date")
	event.Time = r.FormValue("time")
	event.Description = r.FormValue("description")
	event.Fee, _ = strconv.ParseFloat(r.FormValue("fee"), 64)
	event.Status = r.FormValue("status")

	file, handler, err := r.FormFile("image")
	if err != nil {
		http.Error(w, err.Error(), http.StatusBadRequest)
		return
	}
	defer file.Close()

	filePath := fmt.Sprintf("../public/img/event/%s", handler.Filename)
	out, err := os.Create(filePath)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}
	defer out.Close()

	_, err = io.Copy(out, file)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	event.Image = filePath

	_, err = db.Exec("INSERT INTO events (title, date, time, image, description, fee, status) VALUES (?, ?, ?, ?, ?, ?, ?)",
		event.Title, event.Date, event.Time, event.Image, event.Description, event.Fee, event.Status)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	// Send response to client
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusCreated)
	json.NewEncoder(w).Encode(map[string]string{"message": "Event created successfully"})
}

func editEvent(w http.ResponseWriter, r *http.Request) {
	if r.Method != "PUT" {
		http.Error(w, "Method not allowed !", http.StatusMethodNotAllowed)
		return
	}

	var event Event
	event.Title = r.FormValue("title")
	event.Date = r.FormValue("date")
	event.Time = r.FormValue("time")
	event.Description = r.FormValue("description")
	event.Fee, _ = strconv.ParseFloat(r.FormValue("fee"), 64)
	event.Status = r.FormValue("status")

	// Handle image update
	file, handler, err := r.FormFile("image")
	if err == nil {
		defer file.Close()
		filePath := fmt.Sprintf("../public/img/event/%s", handler.Filename)
		out, err := os.Create(filePath)
		if err != nil {
			http.Error(w, err.Error(), http.StatusInternalServerError)
			return
		}
		defer out.Close()
		_, err = io.Copy(out, file)
		if err != nil {
			http.Error(w, err.Error(), http.StatusInternalServerError)
			return
		}
		event.Image = filePath
	}

	// Update event in the database
	_, err = db.Exec("UPDATE events SET title = ?, date = ?, time = ?, image = ?, description = ?, fee = ?, status = ? WHERE id = ?",
		event.Title, event.Date, event.Time, event.Image, event.Description, event.Fee, event.Status, r.FormValue("id"))
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	// Send response to client
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	json.NewEncoder(w).Encode(map[string]string{"message": "Event updated successfully"})
}

func delEvent(w http.ResponseWriter, r *http.Request) {
	if r.Method != "DELETE" {
		http.Error(w, "Method not allowed !", http.StatusMethodNotAllowed)
		return
	}

	id := r.URL.Query().Get("id")
	if id == "" {
		http.Error(w, "Event ID is required", http.StatusBadRequest)
		return
	}

	_, err := db.Exec("DELETE FROM events WHERE id = ?", id)
	if err != nil {
		http.Error(w, err.Error(), http.StatusInternalServerError)
		return
	}

	// Send response to client
	w.Header().Set("Content-Type", "application/json")
	w.WriteHeader(http.StatusOK)
	json.NewEncoder(w).Encode(map[string]string{"message": "Event deleted successfully"})
}
