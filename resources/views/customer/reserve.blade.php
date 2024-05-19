@extends('master.layout')
@section('konten')
    <link rel="stylesheet" href="/css/homepage/reserve.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--reservation landpage-->
    <section id="background-reserve" class="up-reserve">
        <div class="container-xxl py-5 hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-1 font-weight text-black my-4">Reservation</h1>
                {{-- <nav> --}}
                    <ol class="breadcrumb justify-content-center">
                        <p class="display-8">Booking Akasha now!</p>
            </div>
        </div>
        </div>
    </section>

<!--reservation form-->
<section id="reservation-form" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Enjoy your time at Akasha!</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="date" placeholder="Date" required>
                                <label for="date">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="people" placeholder="Number of People" min="1" required>
                                <label for="people">Number of People</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="location" required>
                                    <option value="indoor">Indoor</option>
                                    <option value="outdoor">Outdoor</option>
                                </select>
                                <label for="location">Location</label>
                            </div>
                        </div>

                        <!-- Buat nambah menu apa ndak -->
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="includeMenuOption">
                                <label class="form-check-label" for="includeMenuOption">
                                    Include Menu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="notIncludeMenuOption">
                                <label class="form-check-label" for="notIncludeMenuOption">
                                    Not Include Menu
                                </label>
                            </div>
                        </div>

                        <!-- Buat Note -->
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="note" style="height: 100px"></textarea>
                                <label for="note">Special Request</label>
                            </div>
                        </div>

                        <!-- Buat Menu -->
                        <div id="menuSelection" style="display: none;" class="col-12">
                            <h5 class="text-center">Pilihan Menu</h5>

                            <!-- Bookmark Navigasi -->
                            <div class="menu-bookmarks text-center mb-4">
                                <a href="#coffee" class="btn btn-outline-primary m-1">Coffee</a>
                                <a href="#non-coffee" class="btn btn-outline-primary m-1">Non Coffee</a>
                                <a href="#signature" class="btn btn-outline-primary m-1">Signature</a>
                            </div>

                            <!-- Segmen Coffee -->
                            <div id="coffee" class="menu-segment">
                                <h6 class="text-center">Coffee</h6>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="kopi.jpg" alt="Coffee 1">
                                            <div class="menu-card-title">Espresso</div>
                                            <div class="menu-card-price">Rp30.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="kopi.jpg" alt="Coffee 2">
                                            <div class="menu-card-title">Cappuccino</div>
                                            <div class="menu-card-price">Rp35.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="kopi.jpg" alt="Coffee 2">
                                            <div class="menu-card-title">Cappuccino</div>
                                            <div class="menu-card-price">Rp35.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="kopi.jpg" alt="Coffee 2">
                                            <div class="menu-card-title">Cappuccino</div>
                                            <div class="menu-card-price">Rp35.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="kopi.jpg" alt="Coffee 2">
                                            <div class="menu-card-title">Cappuccino</div>
                                            <div class="menu-card-price">Rp35.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="kopi.jpg" alt="Coffee 2">
                                            <div class="menu-card-title">Cappuccino</div>
                                            <div class="menu-card-price">Rp35.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Segmen Non Coffee -->
                            <div id="non-coffee" class="menu-segment">
                                <h6 class="text-center">Non Coffee</h6>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="teh.jpg" alt="Non Coffee 1">
                                            <div class="menu-card-title">Tea</div>
                                            <div class="menu-card-price">Rp20.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="jus.jpg" alt="Non Coffee 2">
                                            <div class="menu-card-title">Juice</div>
                                            <div class="menu-card-price">Rp25.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="jus.jpg" alt="Non Coffee 2">
                                            <div class="menu-card-title">Juice</div>
                                            <div class="menu-card-price">Rp25.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="teh.jpg" alt="Non Coffee 1">
                                            <div class="menu-card-title">Tea</div>
                                            <div class="menu-card-price">Rp20.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="jus.jpg" alt="Non Coffee 2">
                                            <div class="menu-card-title">Juice</div>
                                            <div class="menu-card-price">Rp25.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="jus.jpg" alt="Non Coffee 2">
                                            <div class="menu-card-title">Juice</div>
                                            <div class="menu-card-price">Rp25.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Segmen Signature -->
                            <div id="signature" class="menu-segment">
                                <h6 class="text-center">Signature</h6>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="mc.jpg" alt="Signature 1">
                                            <div class="menu-card-title">Special Blend</div>
                                            <div class="menu-card-price">Rp50.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="menu-card">
                                            <div class="quantity-control">
                                                <button class="btn btn-sm btn-outline-secondary minus-btn">-</button>
                                                <span class="menu-quantity">0</span>
                                                <button class="btn btn-sm btn-outline-secondary plus-btn">+</button>
                                            </div>
                                            <img src="matcha.jpg" alt="Signature 2">
                                            <div class="menu-card-title">Exclusive Latte</div>
                                            <div class="menu-card-price">Rp45.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Amount -->
                        <div id="totalAmount" class="col-12" style="display: none;"></div>

                        <!-- Reserve Button -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Reserve Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
const includeMenuCheckbox = document.getElementById('includeMenuOption');
const notIncludeMenuCheckbox = document.getElementById('notIncludeMenuOption');
const totalAmountDiv = document.getElementById('totalAmount');
const minusButtons = document.querySelectorAll('.minus-btn');
const plusButtons = document.querySelectorAll('.plus-btn');

includeMenuCheckbox.addEventListener('change', function() {
    if (this.checked) {
        notIncludeMenuCheckbox.checked = false;
        document.getElementById('menuSelection').style.display = 'block';
        calculateTotal();
    } else {
        document.getElementById('menuSelection').style.display = 'none';
        totalAmountDiv.style.display = 'none';
    }
});

notIncludeMenuCheckbox.addEventListener('change', function() {
    if (this.checked) {
        includeMenuCheckbox.checked = false;
        document.getElementById('menuSelection').style.display = 'none';
        totalAmountDiv.style.display = 'none';
    }
});

minusButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        const quantitySpan = this.nextElementSibling;
        let quantity = parseInt(quantitySpan.textContent);
        if (quantity > 0) {
            quantity--;
            quantitySpan.textContent = quantity;
            calculateTotal();
        }
    });
});

plusButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        const quantitySpan = this.previousElementSibling;
        let quantity = parseInt(quantitySpan.textContent);
        quantity++;
        quantitySpan.textContent = quantity;
        calculateTotal();
    });
});

function calculateTotal() {
    let total = 0;
    document.querySelectorAll('.menu-card').forEach(function(card) {
        const quantity = parseInt(card.querySelector('.menu-quantity').textContent);
        if (quantity > 0) {
            const price = parseFloat(card.querySelector('.menu-card-price').textContent.replace('Rp', '').replace('.', '').replace(',', ''));
            total += price * quantity;
        }
    });
    totalAmountDiv.textContent = 'Total Amount: Rp' + total.toLocaleString();
    totalAmountDiv.style.display = 'block';
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
