<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Academy | Join 1000+ Happy Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-jQzY8nT6nbgXPIWTWh8TMeN4N4N9gV8OgxynB1bLwSvAKXQeVAvVgHc+9vQ+SbDoOvjVhfhvAc3NltvZGsrz3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        thiram: '#e8722e',
                        thiramLight: '#f59e0b',
                        thiramDark: '#d97706',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-gentle': 'bounceGentle 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-80px * 8));
            }
        }

        .sports-carousel {
            animation: scroll 20s linear infinite;
        }

        .sports-carousel:hover {
            animation-play-state: paused;
        }

        .gradient-text {
            background: linear-gradient(45deg, #e8722e, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-floating {
            position: relative;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            transform: translateY(-1.5rem) scale(0.85);
            color: #e8722e;
        }

        .form-floating label {
            position: absolute;
            top: 50%;
            left: 2.5rem;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            pointer-events: none;
            color: #9ca3af;
        }

        .success-checkmark {
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }

        .success-checkmark.show {
            opacity: 1;
            transform: scale(1);
        }
    </style>


</head>

<body class="bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 min-h-screen">
    <!-- Mobile-First Header -->
    <div class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-orange-100">
        <div class="max-w-4xl mx-auto px-4 py-3 flex items-center justify-between">

            <!-- Logo + Brand Text -->
            <div class="flex items-center space-x-3">
                <!-- Logo Image -->
                <img src="" alt="Sports Logo"
                    class="h-10 sm:h-12 w-auto rounded-xl shadow-lg">

                <!-- Brand Name and Tagline -->
                <div>
                    <h1 class="text-lg sm:text-xl font-bold text-gray-800">Sports</h1>
                    <p class="text-xs text-gray-600 hidden sm:block">Excellence in Sports</p>
                </div>
            </div>

            <!-- Rating Block -->
            <div
                class="flex items-center bg-white rounded-lg px-2 py-1 sm:px-3 sm:py-2 shadow-sm border border-orange-100">
                <img src="https://cdn-icons-png.flaticon.com/512/2504/2504739.png" alt="Google"
                    class="h-4 sm:h-5 mr-1 sm:mr-2">
                <div>
                    <div class="flex items-center">
                        <span class="text-yellow-400 text-xs sm:text-sm">★★★★★</span>
                        <span class="font-bold text-gray-800 text-xs sm:text-sm ml-1">4.9</span>
                    </div>
                    <p class="text-xs text-gray-600">469+ Reviews</p>
                </div>
            </div>

        </div>
    </div>


    <div class="max-w-4xl mx-auto p-4 sm:p-6">
        <!-- Hero Section -->
        <div class="text-center mb-8 animate-slide-up">
            <div
                class="inline-flex items-center bg-gradient-to-r from-thiram/10 to-thiramLight/10 rounded-full px-4 py-2 mb-4">
                <i class="fas fa-calendar-check text-thiram mr-2 animate-pulse"></i>
                <span class="text-sm font-medium text-thiram">Now Enrolling for the Upcoming Batch!</span>
            </div>


            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 leading-tight">
                Transform Your Child Into
                <span class="gradient-text block">Sports Champion</span>
            </h2>
            <p class="text-gray-600 text-lg sm:text-xl mb-6 max-w-2xl mx-auto">
                Join 1000+ happy families who trust us with their child's sporting journey. Professional coaches, proven
                results, lifetime memories.
            </p>

            <!-- Trust Indicators -->
            <div class="flex flex-wrap justify-center gap-4 sm:gap-8 mb-8">
                <div class="flex items-center space-x-2 bg-white/70 rounded-full px-4 py-2 shadow-sm">
                    <i class="fas fa-users text-thiram"></i>
                    <span class="text-sm font-medium text-gray-700">1000+ Students</span>
                </div>
                <div class="flex items-center space-x-2 bg-white/70 rounded-full px-4 py-2 shadow-sm">
                    <i class="fas fa-trophy text-thiram"></i>
                    <span class="text-sm font-medium text-gray-700">100+ Medals Won</span>
                </div>
                <div class="flex items-center space-x-2 bg-white/70 rounded-full px-4 py-2 shadow-sm">
                    <i class="fas fa-star text-thiram"></i>
                    <span class="text-sm font-medium text-gray-700">4.9/5 Rating</span>
                </div>
            </div>
        </div>








        <div>
            <!-- Reel Carousel Container -->
            <div class="bg-gray-900 rounded-2xl p-6 relative max-w-5xl mx-auto">
                <h3 class="text-white text-xl font-bold mb-6 text-center">Testimonial Video Reels</h3>

                <!-- Carousel Wrapper -->
                <div class="overflow-hidden rounded-lg">
                    <div class="flex transition-transform duration-300 ease-in-out pr-8" id="carouselTrack">
                        <!-- Reel Items -->
                        <div class="flex-shrink-0 px-2 w-[80vw] sm:w-1/3 md:w-1/4 lg:w-1/5">
                            <video controls class="w-full rounded-lg aspect-[9/16] object-cover"
                                src="" poster=""></video>
                            <div class="text-white mt-2 text-center">
                                <p class="font-semibold">Parent Testimonial</p>
                                <p class="text-gray-300 text-sm">Cricket Program</p>
                            </div>
                        </div>

                        <div class="flex-shrink-0 px-2 w-[80vw] sm:w-1/3 md:w-1/4 lg:w-1/5">
                            <video controls class="w-full rounded-lg aspect-[9/16] object-cover"
                                src="" poster=""></video>
                            <div class="text-white mt-2 text-center">
                                <p class="font-semibold">Student</p>
                                <p class="text-gray-300 text-sm">Roller Skating</p>
                            </div>
                        </div>

                        <div class="flex-shrink-0 px-2 w-[80vw] sm:w-1/3 md:w-1/4 lg:w-1/5">
                            <video controls class="w-full rounded-lg aspect-[9/16] object-cover"
                                src="" poster=""></video>
                            <div class="text-white mt-2 text-center">
                                <p class="font-semibold">Student Review</p>
                                <p class="text-gray-300 text-sm">Badminton Program</p>
                            </div>
                        </div>

                        <div class="flex-shrink-0 px-2 w-[80vw] sm:w-1/3 md:w-1/4 lg:w-1/5">
                            <video controls class="w-full rounded-lg aspect-[9/16] object-cover"
                                src="" poster=""></video>
                            <div class="text-white mt-2 text-center">
                                <p class="font-semibold">Parent Testimonial</p>
                                <p class="text-gray-300 text-sm">Gymnastics Program</p>
                            </div>
                        </div>

                        <div class="flex-shrink-0 px-2 w-[80vw] sm:w-1/3 md:w-1/4 lg:w-1/5">
                            <video controls class="w-full rounded-lg aspect-[9/16] object-cover"
                                src="" poster=""></video>
                            <div class="text-white mt-2 text-center">
                                <p class="font-semibold">Parent Testimonial</p>
                                <p class="text-gray-300 text-sm">Roller Skating</p>
                            </div>
                        </div>
                        <div class="flex-shrink-0 px-2 w-[80vw] sm:w-1/3 md:w-1/4 lg:w-1/5">
                            <video controls class="w-full rounded-lg aspect-[9/16] object-cover"
                                src="" poster=""></video>
                            <div class="text-white mt-2 text-center">
                                <p class="font-semibold">Coach Testimonial</p>
                                <p class="text-gray-300 text-sm">Cricket Program</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="prevBtn" aria-label="Previous"
                    class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 bg-opacity-70 hover:bg-opacity-90 text-white rounded-full p-2 disabled:opacity-40 disabled:cursor-not-allowed z-10">
                    &#10094;
                </button>
                <button id="nextBtn" aria-label="Next"
                    class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 bg-opacity-70 hover:bg-opacity-90 text-white rounded-full p-2 disabled:opacity-40 disabled:cursor-not-allowed z-10">
                    &#10095;
                </button>
            </div>

            <script>
                const track = document.getElementById('carouselTrack');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const items = track.children;
                const totalItems = items.length;
                let currentIndex = 0;

                // Determine how many items to show based on screen width
                function getItemsPerView() {
                    const width = window.innerWidth;
                    if (width < 640) {
                        return 1;  // Mobile - 1 video
                    } else if (width < 1024) {
                        return 3;  // Tablets and small laptops - 3 videos
                    } else {
                        return 4;  // Large screens - 4 videos
                    }
                }

                function updateCarousel() {
                    const itemsPerView = getItemsPerView();
                    const itemWidth = items[0].offsetWidth;
                    const maxIndex = totalItems - itemsPerView;

                    if (currentIndex < 0) currentIndex = 0;
                    if (currentIndex > maxIndex) currentIndex = maxIndex;

                    const translateX = -itemWidth * currentIndex;
                    track.style.transform = `translateX(${translateX}px)`;

                    prevBtn.disabled = currentIndex === 0;
                    nextBtn.disabled = currentIndex === maxIndex || maxIndex < 0;
                }

                prevBtn.addEventListener('click', () => {
                    currentIndex--;
                    updateCarousel();
                });

                nextBtn.addEventListener('click', () => {
                    currentIndex++;
                    updateCarousel();
                });

                window.addEventListener('resize', () => {
                    currentIndex = 0; // reset position on resize to avoid out-of-bounds
                    updateCarousel();
                });

                // Initialize on load
                updateCarousel();
            </script>
        </div>
        <br>


        <!-- Sports Carousel -->
        <div class="bg-gradient-to-r from-thiram to-thiramLight rounded-2xl p-4 sm:p-6 mb-8">
            <h3 class="text-white text-lg sm:text-xl font-bold mb-4 text-center">Choose From 9 Amazing Sports</h3>

            <div class="flex space-x-4 overflow-x-auto no-scrollbar py-2" style="scroll-snap-type: x mandatory;">
                <!-- Cricket -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-baseball-ball text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Cricket</span>
                </div>

                <!-- Football -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-futbol text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Football</span>
                </div>

                <!-- Padel -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-table-tennis text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Padel</span>
                </div>


                <!-- Archery -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-bullseye text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Archery</span>
                </div>

                <!-- Fencing -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-person-running text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Athletes</span>
                </div>
                <!-- Gymnastics -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-dumbbell text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Gymnastics</span>
                </div>



                <!-- Badminton -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-feather-alt text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Badminton</span>
                </div>

                <!-- Skating -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-shoe-prints text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Skating</span>
                </div>

                <!-- Fencing -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-chess-knight text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Fencing</span>
                </div>
                <!-- Fencing -->
                <div
                    class="flex-shrink-0 w-16 h-16 sm:w-20 sm:h-20 glass-effect rounded-2xl flex flex-col items-center justify-center scroll-snap-align-start">
                    <i class="fas fa-person-running text-white text-xl sm:text-2xl mb-1"></i>
                    <span class="text-white text-xs font-medium">Athletes</span>
                </div>
            </div>

        </div>

        <style>
            /* Hide scrollbar but keep scroll functionality */
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }

            .no-scrollbar {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
        </style>

        <div class="swiper-container w-full h-full rounded-xl overflow-hidden border-4 border-amber-400 shadow-xl">
            <div class="swiper-wrapper">
                <!-- Image 1 -->
                <div class="swiper-slide">
                    <img src="" alt="Image 1" class="w-full h-full object-cover">
                </div>

                <!-- Image 2 -->
                <div class="swiper-slide">
                    <img src="" alt="Image 2" class="w-full h-full object-cover">
                </div>

                <!-- Optional Additional Image -->
                <div class="swiper-slide">
                    <img src="" alt="Image 3" class="w-full h-full object-cover">
                </div>

                <!-- Golden-themed pagination dots -->
                <div class="swiper-pagination !bottom-3"></div>
            </div>


        </div>

        <!-- Swiper JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Swiper('.swiper-container', {
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    speed: 1200,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    }
                });
            });
        </script>

        <style>
            .swiper-container {
                max-height: 80vh;
            }

            .swiper-pagination-bullet {
                background: rgba(245, 158, 11, 0.5);
                /* amber-400 with opacity */
                width: 10px;
                height: 10px;
                transition: all 0.3s ease;
            }

            .swiper-pagination-bullet-active {
                background: rgb(245, 158, 11);
                /* pure amber-400 */
                width: 24px;
                border-radius: 4px;
                box-shadow: 0 0 8px rgba(245, 158, 11, 0.8);
            }
        </style><br><br>



        <!-- Main Form -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden animate-fade-in">
            <!-- Form Header -->
            <div
                class="bg-gradient-to-r from-thiram/5 to-thiramLight/5 p-6 sm:p-8 text-center border-b border-orange-100">
                <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">
                    🎯 Secure Your Child's Spot Today!
                </h3>
                <p class="text-gray-600 mb-4">
                    We're located at
                    <a href="https://maps.app.goo.gl/ZWrAUE9uL3gBjmUd7" target="_blank" rel="noopener noreferrer"
                        class="text-thiram font-semibold underline hover:text-thiramLight transition">
                        Semmancheri, Chennai
                    </a>. Fill out the form and get started in just 2 minutes.
                </p>
                <div class="flex items-center justify-center space-x-2 text-sm text-thiram font-medium">
                    <i class="fas fa-clock animate-pulse-slow"></i>
                    <span>Only 23 spots left this month!</span>
                </div>
            </div>


            <form class="p-6 sm:p-8 space-y-6" id="registrationForm">
                <!-- Location Autocomplete & Map -->
                <div class="w-full space-y-2">
                    <label class="block text-lg font-semibold text-gray-800">
                        Your Location <span class="text-red-500">*</span>
                    </label>

                    <div class="relative">
                        <input type="text" id="autocomplete" name="location"
                            placeholder="Search or tap the icon to use your location"
                            class="w-full pl-4 pr-12 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-thiram focus:border-thiram text-gray-800"
                            required />

                        <!-- Location icon inside the input -->
                        <button type="button" onclick="useMyLocation()"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-thiram"
                            title="Use current location">
                            <!-- Example: use a simple compass icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>

                        </button>
                    </div>

                    <!-- Hidden Fields -->
                    <input type="hidden" name="lat" id="lat">
                    <input type="hidden" name="lng" id="lng">
                    <input type="hidden" name="distance_km" id="distance_km">

                    <!-- Distance Info -->
                    <div id="distance-info"
                        class="text-sm text-gray-700 bg-gray-50 border mt-2 border-gray-200 rounded-lg p-3 font-medium">
                    </div>

                    <!-- Override Checkbox -->
                    <div id="outside-confirm" class="hidden mt-1 text-sm text-red-600">
                        <label class="inline-flex items-center space-x-2">
                            <input type="checkbox" id="overrideCheck" class="form-checkbox h-4 w-4 text-red-500">
                            <span>I’m okay being outside 8 km range</span>
                        </label>
                    </div>

                    <!-- Map Preview -->
                    <div id="map" class="rounded-xl border h-64 w-full mt-4"></div>
                </div>


                <!-- Parent & Child Names -->
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="form-floating">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="parentName" placeholder="Parent's Name*"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-thiram focus:ring-4 focus:ring-thiram/10 transition-all duration-300 text-gray-800 font-medium"
                                required />
                            <div class="success-checkmark absolute right-4 top-1/2 transform -translate-y-1/2">
                                <i class="fas fa-check-circle text-green-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-child text-gray-400"></i>
                            </div>
                            <input type="text" id="childName" placeholder="Child's Name*"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-thiram focus:ring-4 focus:ring-thiram/10 transition-all duration-300 text-gray-800 font-medium"
                                required />
                            <div class="success-checkmark absolute right-4 top-1/2 transform -translate-y-1/2">
                                <i class="fas fa-check-circle text-green-500"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="form-floating">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" placeholder="Email Address*"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-thiram focus:ring-4 focus:ring-thiram/10 transition-all duration-300 text-gray-800 font-medium"
                                required />
                            <div class="success-checkmark absolute right-4 top-1/2 transform -translate-y-1/2">
                                <i class="fas fa-check-circle text-green-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-gray-400"></i>
                            </div>
                            <input type="tel" id="phone" placeholder="Phone Number*"
                                class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-thiram focus:ring-4 focus:ring-thiram/10 transition-all duration-300 text-gray-800 font-medium"
                                required />
                            <div class="success-checkmark absolute right-4 top-1/2 transform -translate-y-1/2">
                                <i class="fas fa-check-circle text-green-500"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Age & Sport Selection -->
                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-3">Child's Age Group*</label>
                        <div class="relative">
                            <select id="ageGroup"
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-thiram focus:ring-4 focus:ring-thiram/10 transition-all duration-300 text-gray-800 font-medium appearance-none bg-white"
                                required>
                                <option value="" disabled selected>Select age group</option>
                                <option value="3-5">Little Champions (3-5 years)</option>
                                <option value="6-8">Young Athletes (6-8 years)</option>
                                <option value="9-12">Rising Stars (9-12 years)</option>
                                <option value="13-16">Teen Champions (13-16 years)</option>
                                <option value="16+">Advanced Athletes (16+ years)</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-3">Preferred Sport*</label>
                        <div class="relative">
                            <select id="sport"
                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-thiram focus:ring-4 focus:ring-thiram/10 transition-all duration-300 text-gray-800 font-medium appearance-none bg-white"
                                required>
                                <option value="" disabled selected>Choose your sport</option>
                                <option value="cricket">Cricket</option>
                                <option value="football">Football</option>
                                <option value="padel">Padel</option>
                                <option value="gymnastics">Gymnastics</option>
                                <option value="archery">Archery</option>
                                <option value="badminton">Badminton</option>
                                <option value="skating">Roller Skating</option>
                                <option value="fencing">Fencing</option>
                                <option value="athletes">Athletes</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Collapsible Why Choose Us (Green Theme) -->
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-6">
                    <button
                        onclick="document.getElementById('whyContent').classList.toggle('hidden'); this.querySelector('i').classList.toggle('fa-chevron-down'); this.querySelector('i').classList.toggle('fa-chevron-up')"
                        class="flex items-center justify-between w-full text-left">
                        <div class="flex items-center space-x-2">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-star text-green-600 text-lg"></i>
                            </div>
                            <h4 class="font-bold text-green-800">Why Choose Us?</h4>
                        </div>
                        <i class="fas fa-chevron-down text-green-600"></i>
                    </button>

                    <!-- Content to toggle -->
                    <div id="whyContent" class="mt-4 space-y-2 text-sm text-green-700 hidden">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>Certified professional coaches</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>State-of-the-art training facilities</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            <span>Focus on both skill and character development</span>
                        </div>
                    </div>
                </div>



                <!-- Submit Button -->
                <button type="submit" id="submitBtn"
                    class="w-full bg-gradient-to-r from-thiram to-thiramLight hover:from-thiramDark hover:to-thiram text-white font-bold py-5 px-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 group text-lg transform hover:scale-105 active:scale-95">
                    <div class="flex items-center justify-center space-x-3">
                        <i class="fas fa-rocket text-xl transition-transform group-hover:translate-x-1"></i>
                        <span>Enroll Now</span>
                        <div class="hidden animate-spin">
                            <i class="fas fa-spinner"></i>
                        </div>
                    </div>
                </button>

                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center gap-4 pt-6 border-t border-gray-100">
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <i class="fas fa-shield-alt text-green-500"></i>
                        <span>100% Secure</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <i class="fas fa-phone text-blue-500"></i>
                        <span>Instant Callback</span>
                    </div>

                </div>
            </form>
        </div>



        <!-- Social Proof Section -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 mb-4">Join thousands of happy families</p>
            <div class="flex justify-center space-x-2 mb-2">
                <div class="flex -space-x-2">
                    <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                        src="assets/images/social/1.png" alt="User 1">
                    <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                        src="assets/images/social/2.png" alt="User 2">
                    <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                        src="assets/images/social/3.png" alt="User 3">
                    <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                        src="assets/images/social/4.png" alt="User 4">
                </div>
            </div>
            <div class="text-sm text-gray-500">+1000 happy parents have joined</div>
        </div>

        <!-- Floating Contact Buttons -->
        <div class="fixed bottom-4 right-4 z-50 flex flex-col items-end space-y-3">
            <!-- Call Button -->
            <a href="tel:+91123456789"
                class="flex items-center gap-3 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-xl px-4 py-3 transition duration-300 ease-in-out"
                title="Call Us">
                <i class="fas fa-phone text-2xl"></i>
                <span class="hidden sm:inline text-sm font-medium">Call Now</span>
            </a>


            <!-- WhatsApp Button -->
            <a href="https://wa.me/91123456789?text=Hi%20Thiram%20Sports%2C%20I%27m%20interested%20in%20your%20programs."
                class="flex items-center gap-3 bg-[#25D366] hover:bg-green-500 text-white rounded-full shadow-xl px-4 py-3 transition duration-300 ease-in-out"
                target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp">
                <i class="fab fa-whatsapp text-2xl"></i>
                <span class="hidden sm:inline text-sm font-medium">WhatsApp</span>
            </a>
        </div>

        <script>
            const semmancheri = { lat: 12.86566243675846, lng: 80.22538505414849 };
            let map, markerUser, markerSemmancheri, directionsRenderer;

            function initAutocomplete() {
                const input = document.getElementById("autocomplete");
                const autocomplete = new google.maps.places.Autocomplete(input);

                autocomplete.addListener("place_changed", () => {
                    const place = autocomplete.getPlace();
                    if (!place.geometry) return;

                    const lat = place.geometry.location.lat();
                    const lng = place.geometry.location.lng();

                    document.getElementById("lat").value = lat;
                    document.getElementById("lng").value = lng;

                    showMap(lat, lng);
                    checkDistance(lat, lng);
                });

                initMap();
            }

            function useMyLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const lat = position.coords.latitude;
                            const lng = position.coords.longitude;

                            // Set hidden fields
                            document.getElementById("lat").value = lat;
                            document.getElementById("lng").value = lng;

                            // Reverse geocode to get address
                            const geocoder = new google.maps.Geocoder();
                            const latlng = { lat, lng };

                            geocoder.geocode({ location: latlng }, (results, status) => {
                                if (status === "OK" && results[0]) {
                                    const formattedAddress = results[0].formatted_address;

                                    // Autofill the search bar
                                    document.getElementById("autocomplete").value = formattedAddress;

                                    // Show on map and check distance
                                    showMap(lat, lng);
                                    checkDistance(lat, lng);
                                } else {
                                    alert("Unable to get address for your location.");
                                }
                            });
                        },
                        () => {
                            alert("Permission denied or location unavailable.");
                        }
                    );
                } else {
                    alert("Geolocation is not supported by your browser.");
                }
            }



            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: semmancheri,
                    zoom: 12,
                });

                markerSemmancheri = new google.maps.Marker({
                    position: semmancheri,
                    map: map,
                    title: "Semmancheri (Academy)",
                    icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png",
                });

                directionsRenderer = new google.maps.DirectionsRenderer({ map: map });
            }

            function showMap(lat, lng) {
                const userLocation = new google.maps.LatLng(lat, lng);

                if (markerUser) markerUser.setMap(null);
                markerUser = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: "Your Location",
                    icon: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
                });

                const bounds = new google.maps.LatLngBounds();
                bounds.extend(userLocation);
                bounds.extend(semmancheri);
                map.fitBounds(bounds);

                const directionsService = new google.maps.DirectionsService();
                directionsService.route({
                    origin: userLocation,
                    destination: semmancheri,
                    travelMode: google.maps.TravelMode.DRIVING,
                }, function (result, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(result);
                    }
                });
            }

            function checkDistance(lat, lng) {
                const service = new google.maps.DistanceMatrixService();
                service.getDistanceMatrix({
                    origins: [{ lat, lng }],
                    destinations: [semmancheri],
                    travelMode: 'DRIVING',
                }, function (response, status) {
                    const info = document.getElementById("distance-info");
                    const override = document.getElementById("outside-confirm");
                    const overrideCheck = document.getElementById("overrideCheck");
                    const submitBtn = document.getElementById("submitBtn");
                    const distanceKmField = document.getElementById("distance_km");

                    if (status === 'OK') {
                        const result = response.rows[0].elements[0];
                        const distanceText = result.distance.text;
                        const distanceValue = result.distance.value / 1000;

                        distanceKmField.value = distanceValue.toFixed(2);

                        if (distanceValue <= 8) {
                            info.innerHTML = `✅ You're <strong>${distanceText}</strong> from us.`;
                            override.classList.add("hidden");
                            submitBtn.disabled = false;
                        } else {
                            info.innerHTML = info.innerHTML = `🎯 You're <strong>${distanceText}</strong> away! That’s a bit outside our usual 8 km zone, but passionate players are always welcome!`;

                            override.classList.remove("hidden");
                            submitBtn.disabled = !overrideCheck.checked;

                            overrideCheck.onchange = () => {
                                submitBtn.disabled = !overrideCheck.checked;
                            };
                        }
                    } else {
                        info.innerText = "⚠️ Failed to check distance. Try again.";
                        submitBtn.disabled = true;
                    }
                });
            }
        </script>

        <!-- Load Maps JS -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY-oyg&libraries=places&callback=initAutocomplete"
            async defer></script>




        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('registrationForm');
                const submitBtn = document.getElementById('submitBtn');
                const inputs = form.querySelectorAll('input[required], select[required]');

                // Add success checkmarks on valid input
                inputs.forEach(input => {
                    input.addEventListener('input', function () {
                        const checkmark = this.parentElement.querySelector('.success-checkmark');
                        if (this.checkValidity() && this.value.length > 0) {
                            checkmark?.classList.add('show');
                        } else {
                            checkmark?.classList.remove('show');
                        }
                    });
                });

                // Form submission
                form.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Show loading state
                    const btnContent = submitBtn.querySelector('div');
                    const spinner = submitBtn.querySelector('.hidden');
                    const text = submitBtn.querySelector('span');

                    btnContent.classList.add('opacity-75');
                    spinner.classList.remove('hidden');
                    text.textContent = 'Processing...';
                    submitBtn.disabled = true;

                    // Collect form data
                    const formData = new FormData();
                    formData.append('parentName', document.getElementById('parentName').value);
                    formData.append('childName', document.getElementById('childName').value);
                    formData.append('email', document.getElementById('email').value);
                    formData.append('phone', document.getElementById('phone').value);
                    formData.append('ageGroup', document.getElementById('ageGroup').value);
                    formData.append('sport', document.getElementById('sport').value);
                    formData.append('lat', document.getElementById('lat').value);
                    formData.append('lng', document.getElementById('lng').value);
                    formData.append('distance_km', document.getElementById('distance_km').value);


                    // AJAX request
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', 'Form/lead.php', true);

                    xhr.onload = function () {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            // Success state
                            btnContent.classList.remove('opacity-75');
                            spinner.classList.add('hidden');
                            text.textContent = 'Registration Successful!';
                            submitBtn.className = submitBtn.className.replace('from-thiram to-thiramLight', 'from-green-500 to-green-600');

                            // Show success message
                            const successDiv = document.createElement('div');
                            successDiv.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4';
                            successDiv.innerHTML = `
                    <div class="bg-white rounded-2xl p-8 max-w-md w-full text-center animate-slide-up">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-check text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Registration Successful! </h3>
                        <p class="text-gray-600 mb-6">Thank you for choosing Thiram Sports Academy. We'll contact you within 2 hours.</p>
                        <button onclick="this.parentElement.parentElement.remove()" class="bg-gradient-to-r from-thiram to-thiramLight text-white font-bold py-3 px-6 rounded-xl">
                            Awesome! 
                        </button>
                    </div>
                `;
                            document.body.appendChild(successDiv);

                            // Reset form after delay
                            setTimeout(() => {
                                form.reset();
                                submitBtn.disabled = false;
                                text.textContent = 'Enroll Now';
                                submitBtn.className = submitBtn.className.replace('from-green-500 to-green-600', 'from-thiram to-thiramLight');
                                document.querySelectorAll('.success-checkmark').forEach(check => check.classList.remove('show'));
                            }, 3000);
                        } else {
                            // Error handling
                            btnContent.classList.remove('opacity-75');
                            spinner.classList.add('hidden');
                            text.textContent = '⚠️ Error! Try Again';
                            submitBtn.className = submitBtn.className.replace('from-thiram to-thiramLight', 'from-red-500 to-red-600');

                            setTimeout(() => {
                                submitBtn.disabled = false;
                                text.textContent = 'Enroll Now';
                                submitBtn.className = submitBtn.className.replace('from-red-500 to-red-600', 'from-thiram to-thiramLight');
                            }, 2000);
                        }
                    };

                    xhr.onerror = function () {
                        // Error handling
                        btnContent.classList.remove('opacity-75');
                        spinner.classList.add('hidden');
                        text.textContent = '⚠️ Connection Error!';
                        submitBtn.className = submitBtn.className.replace('from-thiram to-thiramLight', 'from-red-500 to-red-600');

                        setTimeout(() => {
                            submitBtn.disabled = false;
                            text.textContent = 'Enroll Now';
                            submitBtn.className = submitBtn.className.replace('from-red-500 to-red-600', 'from-thiram to-thiramLight');
                        }, 2000);
                    };

                    xhr.send(formData);
                });

                // Add floating label effects
                const floatingInputs = document.querySelectorAll('.form-floating input');
                floatingInputs.forEach(input => {
                    input.addEventListener('focus', function () {
                        this.parentElement.classList.add('focused');
                    });

                    input.addEventListener('blur', function () {
                        if (!this.value) {
                            this.parentElement.classList.remove('focused');
                        }
                    });
                });
            });
        </script>





</body>

</html>