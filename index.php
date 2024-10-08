<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="js/search_filter_card.js"></script>
  <script src="js/indexHeaderChange.js"></script>
  <script src="js/readMore.js"></script>
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/cards.css">
  <link rel="stylesheet" href="styles/search_filter_card.css" />
  <link rel="stylesheet" href="styles/footer_style.css" />
  <link rel="stylesheet" href="styles/header_style.css" />
  <link rel="stylesheet" href="styles/indexHead_hero.css" />
  <link rel="stylesheet" href="styles/reviews_style.css">
  <link rel="icon" href="assets/icons/title_icon.svg" />
  <title>Travel Agency Website</title>
</head>

<body id="body">
  <div class="container" id="indexHero">
    <div class="indexHead_hero" id="indexHero_content">
      <div class="headImg">
        <img src="assets/imgs/mainHead_img.svg">
        <div class="blackout"></div>
      </div>
      <header class="header" id="header" style="color: white;">
        <div class="container">
          <div class="content" id="head_content">
            <div class="sections">
              <a href="/pages/flight-search.php" class="link">
                <img src="/assets/icons/white_airplane_icon.svg" id="head_airPlane_icon" />Find Flight
              </a>
              <a href="/pages/hotel-search.php" class="link">
                <img src="/assets/icons/white_bed_icon.svg" id="head_bed_icon" />Find Stays
              </a>
            </div>

            <a href="/index.php" class="logo">
              <img src="/assets/icons/whiteGreen_logo_icon.svg" id="logo_icon" />
            </a>
            <?php
            if (!$_SESSION['user']) { ?>
              <div class="buttons" id="unlogined_btns">
                <a href="/pages/login.php">
                  <button class="btn login" id="login_btn" style="color: white;">Login</button>
                </a>
                <a href="/pages/sign_up.php">
                  <button class="btn sign_up btn_white" id="sign_up_btn">Sign up</button>
                </a>
              </div> <?php
                    } ?> <?php
                          if ($_SESSION['user']) { ?>
              <div class="logined_elements" id="logined_elements">
                <div class="favourites_link">
                  <a href="#" class="link">
                    <img src="/assets/icons/white_heart_icon.svg" id="heart_icon">
                    <div class="favourites_text">
                      Favourites
                    </div>
                  </a>
                  <span class="vertical_line"></span>
                </div>
                <div class="dropdown">
                  <div class="profile">
                    <button class="avatar" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true" style="background: url(<?= '/' . $_SESSION['user']['avatar'] ?>);">
                      <div class="arrowDown <?= $_SESSION['user']['role'] ?>">
                        <box-icon name='chevron-down'></box-icon>
                      </div>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                      <div class="column">
                        <div class="profile">
                          <div class="avatar" style="background: url(<?= '/' . $_SESSION['user']['avatar'] ?>);"></div>
                          <div class="status_text">
                            <div class="name"><?= $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name'] ?></div>
                            <div class="profile_status">Online</div>
                          </div>
                        </div>
                        <hr />
                        <section class="dropDown_links">
                          <a href="/pages/account.php" class="dropDown_link">
                            <div class="dropDown_link_content">
                              <img src="/assets/icons/user_icon.svg">
                              <div class="dropDown_text">My account</div>
                            </div>
                            <img src="/assets/icons/black_arrowRight.svg" />
                          </a>
                          <a href="/pages/payments.php" class="dropDown_link">
                            <div class="dropDown_link_content">
                              <img src="/assets/icons/card_icon.svg" />
                              <div class="dropDown_text">Payments</div>
                            </div>
                            <img src="/assets/icons/black_arrowRight.svg" />
                          </a>
                          <a href="/pages/settings.php" class="dropDown_link">
                            <div class="dropDown_link_content">
                              <img src="/assets/icons/settings_icon.svg" />
                              <div class="dropDown_text">Settings</div>
                            </div>
                            <img src="/assets/icons/black_arrowRight.svg" />
                          </a>
                        </section>
                        <hr />
                        <section class="dropDown_links">
                          <a href="#" class="dropDown_link">
                            <div class="dropDown_link_content">
                              <img src="/assets/icons/support_icon.svg" />
                              <div class="dropDown_text">Support</div>
                            </div>
                            <img src="/assets/icons/black_arrowRight.svg" />
                          </a>
                          <a href="/vendor/logout.php" class="dropDown_link">
                            <div class="dropDown_link_content">
                              <img src="/assets/icons/logout_icon.svg" />
                              <div class="dropDown_text">Logout</div>
                            </div>
                          </a>
                        </section>
                      </div>
                    </div>
                    <div class="name"><?= $_SESSION['user']['first_name'] . " " . mb_substr($_SESSION['user']['last_name'], 0, 2) . "." ?></div>
                  </div>
                </div>
              </div> <?php
                          }
                      ?>
          </div>
        </div>
      </header>
      <div class="hero content" id="hero">
        <div class="hero_content">
          <div class="head_hero_text">Helping Others</div>
          <h1 class="headHero_h">Live & Travel</h1>
          <p class="indexHero_about">Special offers to suit your plan</p>
        </div>
        <div class="search_filter_card black_color">
          <div class="search_filter_content">
            <div class="horizontal_line" id="sections_line"></div>
            <div class="sections" id="search_sections">
              <button class="btn black_color" id="airplane_stage">
                <img src="assets/icons/black_airplane_icon.svg" />Find Flight
              </button>
              <div class="vertical_line black_color" id="search_filter_line"></div>
              <button class="btn black_color" id="bed_stage">
                <img src="assets/icons/black_bed_icon.svg" />Find Stays
              </button>
            </div>
            <div class="search_filter_forms">
              <div class="flight_input input_filter">
                <form class="input_filter_stroke">
                  <div class="fieldsets">
                    <fieldset class="from-to">
                      <legend>From - To</legend>
                      <div class="form_content">
                        <div class="input_group">
                          <img src="assets/icons/swap-horizontal_icon.svg" class="form_icon_left">
                          <select name="from_selector" class="selectpicker" data-dropup-auto="false" data-live-search="true">
                            <option value="Lahore" selected>Lahore</option>
                            <option value="Karachi">Karachi</option>
                          </select>
                          <span class="group-separator">&mdash;</span>
                          <select name="to_selector" class="selectpicker" data-dropup-auto="false" data-live-search="true">
                            <option value="Lahore">Lahore</option>
                            <option value="Karachi" selected>Karachi</option>
                          </select>
                        </div>
                      </div>
                    </fieldset>

                    <fieldset class="trip">
                      <legend>Trip</legend>
                      <div class="form_content">
                        <div class="input_group">
                          <select name="trip_selector" data-dropup-auto="false" class="selectpicker trip_select">
                            <option value="Return" selected>Return</option>
                            <option value="Single">Single</option>
                          </select>
                        </div>
                      </div>
                    </fieldset>

                    <fieldset class="departReturn">
                      <legend id="departReturn_legend">Depart - Return</legend>
                      <div class="form_content">
                        <input name="depart_input" autocomplete="off" type="text" class="form-control flight_datepicker" id="depart_datepicker" placeholder="07 Nov 22" onkeypress="return false;" style="caret-color: transparent !important;" required>
                        <span class="group-separator" id="departReturn_separator">&mdash;</span>
                        <input name="return_input" autocomplete="off" type="text" class="form-control flight_datepicker" id="return_datepicker" placeholder="07 Nov 22" onkeypress="return false;" style="caret-color: transparent !important;" required>
                      </div>
                    </fieldset>

                    <fieldset class="passengerClass w-auto">
                      <legend>Passenger - Class</legend>
                      <div class="form_content">
                        <input name="passengers_input" type="number" class="passenger_input" placeholder="1" min="1" max="10" pattern="" required>
                        <span>Pasanger, </span>
                        <select name="ticketClass_selector" class="selectpicker" data-dropup-auto="false">
                          <option value="Economy" selected>Economy</option>
                          <option value="Business">Business Class</option>
                          <option value="First class">First Class</option>
                        </select>
                      </div>

                    </fieldset>
                  </div>

                  <div class="filter_buttons">
                    <button type="button" class="btn addPromoCode_btn black_color">
                      <img src="assets/icons/black_plus_icon.svg" />
                      Add Promo Code
                    </button>
                    <a href="/pages/flight-listing.php">
                      <button type="submit" class="btn showFlight_btn black_color" id="search-flight-btn">
                        <img src="assets/icons/black_paperPlane_icon.svg">
                        Show Flights
                      </button>
                    </a>
                  </div>
                </form>
              </div>
              <div class="bed_input input_filter">
                <form class="input_filter_stroke">
                  <div class="fieldsets">
                    <fieldset class="enterDestination">
                      <legend>Enter Destination</legend>
                      <div class="form_content">
                        <div class="input_group">
                          <img src="assets/icons/leading_icon.svg" class="form_icon_left">
                          <select name="enterDestination_selector" class="selectpicker" id="bed_input-city" data-live-search="true" data-size="7" data-display="static" data-dropup-auto="false" required>
                            <option value="" selected disabled>Select option</option>
                            <optgroup label="Turkey">
                              <option value="Istanbul, Turkey">Istanbul</option>
                              <option value="Manavgat, Turkey">Manavgat </option>
                              <option value="Kemer, Turkey">Kemer</option>
                            </optgroup>
                            <optgroup label="Russia">
                              <option value="Moscow, Russia">Moscow</option>
                              <option value="St. Petersburg, Russia">St. Petersburg</option>
                              <option value="Anapa, Russia">Anapa</option>
                            </optgroup>
                            <optgroup label="Canada">
                              <option value="Toronto, Canada">Toronto</option>
                              <option value="Kelowna, Canada">Kelowna</option>
                              <option value="Mont Tremblant, Canada">Mont Tremblant</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                    </fieldset>

                    <fieldset class="checkIn">
                      <legend id="checkIn_legend">Check In</legend>
                      <div class="form_content">
                        <div class="input_group">
                          <input name="checkIn_input" autocomplete="off" type="text" class="form-control bed_datepicker" id="checkIn_datepicker" placeholder="Fri 12/2" onkeypress="return false;" style="caret-color: transparent !important;" required>
                          <img src="assets/icons/calendar_icon.svg" class="form_icon_right">
                        </div>
                      </div>
                    </fieldset>

                    <fieldset class="checkOut">
                      <legend>Check Out</legend>
                      <div class="form_content">
                        <div class="input_group">
                          <input name="checkOut_input" autocomplete="off" type="text" class="form-control bed_datepicker" id="checkOut_datepicker" placeholder="Fri 12/2" onkeypress="return false;" style="caret-color: transparent !important;" required>
                          <img src="assets/icons/calendar_icon.svg" class="form_icon_right">
                        </div>
                      </div>
                    </fieldset>

                    <fieldset class="enterDestination">
                      <legend>Rooms & Guests</legend>
                      <div class="form_content">
                        <div class="input_group">
                          <box-icon type='solid' name='user' class="form_icon_left"></box-icon>
                          <select name="trip_selector" data-dropup-auto="false" class="selectpicker trip_select">
                            <option value="1 room, 1 guest" selected>1 room, 1 guest</option>
                            <option value="1 room, 2 guests">1 room, 2 guests</option>
                            <option value="1 room, 2 guests">2 room, 2 guests</option>
                          </select>
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <div class="filter_buttons">
                    <button type="button" class="btn addPromoCode_btn black_color" id="addPromoCode_btn">
                      <img src="assets/icons/black_plus_icon.svg" />
                      Add Promo Code
                    </button>
                    <a href="/pages/hotel-listing.php">
                      <button type="submit" class="btn showBed_btn black_color">
                        <img src="assets/icons/black_building_icon.svg">
                        Show Places
                      </button>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container_in">
        <div class="cards_content black_color">
          <div class="cards_head">
            <div class="cards_about">
              <div class="cards_about_title">Plan your perfect trip</div>
              <div class="cards_about_description">Search Flights & Places Hire to our most popular destinations</div>
            </div>
            <a href="#">
              <button type="button" class="btn cards_btn black_color">
                See more places
              </button>
            </a>
          </div>
          <div class="row">
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Istanbul, Turkey.svg">
                <div class="sm-card_text">
                  <div class="card_title">Istanbul, Turkey</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Sydney, Australia.svg">
                <div class="sm-card_text">
                  <div class="card_title">Sydney, Australia</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Baku, Azerbaijan.svg">
                <div class="sm-card_text">
                  <div class="card_title">Baku, Azerbaijan</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Malé, Maldives.svg">
                <div class="sm-card_text">
                  <div class="card_title">Malé, Maldives</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Paris, France.svg">
                <div class="sm-card_text">
                  <div class="card_title">Paris, France</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/New York, US.svg">
                <div class="sm-card_text">
                  <div class="card_title">New York, US</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/London, UK.svg">
                <div class="sm-card_text">
                  <div class="card_title">London, UK</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Tokyo, Japan.svg">
                <div class="sm-card_text">
                  <div class="card_title">Tokyo, Japan</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-12 card_link">
              <div class="sm-card">
                <img src="assets/imgs/trip_cards/Dubai, UAE.svg">
                <div class="sm-card_text">
                  <div class="card_title">Dubai, UAE</div>
                  <p>Flights • Hotels • Resorts</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="container_in">
        <div class="row">
          <div class="col-md-6 col-sm-12" style="margin-bottom: 32px;">
            <div class="stage_card flights_stage white_color">
              <div class="stageCard_content">
                <div class="stageCard_text">
                  <div class="stageCard_title">Flights</div>
                  <div class="stageCard_description">Search Flights & Places Hire to our most popular destinations</div>
                </div>
                <a href="/pages/flight-search.php" id="flights_stage">
                  <button class="btn show_btn black_color">
                    <img src="assets/icons/black_paperPlane_icon.svg">
                    Show Flights
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="stage_card hotels_stage white_color">
              <div class="stageCard_content">
                <div class="stageCard_text">
                  <div class="stageCard_title">Hotels</div>
                  <div class="stageCard_description">Search hotels & Places Hire to our most popular destinations</div>
                </div>
                <a href="/pages/hotel-search.php" id="hotels_stage">
                  <button class="btn show_btn black_color" id="search-hotel-btn">
                    <img src="assets/icons/black_paperPlane_icon.svg">
                    Show Hotels
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container_in">
        <div class="cards_content black_color">
          <div class="cards_head">
            <div class="cards_about">
              <div class="cards_about_title">Reviews</div>
              <div class="cards_about_description">What people says about Golobe facilities</div>
            </div>
          </div>
          <div class="reviews_cards black_color">
            <div class="review_card">
              <div class="reviewCard_content">
                <div class="reviewCard_text">
                  <div class="reviewCard_title">“A real sense of community, nurtured”</div>
                  <div class="reviewCard_about">
                    <div class="reviewCard_aboutText">Really appreciate the help and support from spanthe staff during these tough times. Shoutout to Katie for<span class="dots">...</span> <span class="more">helping me always, even when I was out of the country. And always available when needed</span>
                    </div>
                    <div class="reviewCard_aboutMore readBtn" onclick="readMore(0)">View more</div>
                  </div>
                </div>
                <div class="reviewCard_estimate">
                  <div class="reviewCard_stars">
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                  </div>
                  <div class="reviewCard_user">
                    <div class="reviewCard_user_about">
                      <div class="reviewCard_aboutMore">Olga</div>
                      <div class="reviewCard_user_aboutMore">Weave Studios – Kai Tak</div>
                    </div>
                    <div class="reviewCard_user_google">
                      <a href="">
                        <img src="assets/icons/social media/google_icon.svg">
                        <div class="reviewCard_user_googleText">Google</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <img src="assets/imgs/review1.svg">
            </div>
            <div class="review_card">
              <div class="reviewCard_content">
                <div class="reviewCard_text">
                  <div class="reviewCard_title">“The facilities are superb. Clean, slick, bright.”</div>
                  <div class="reviewCard_about">
                    <div class="reviewCard_aboutText">“A real sense of community, nurtured”Really appreciate the help and support from the staff<span class="dots">...</span> <span class="more">during these tough times. Shoutout to Katie for helping me always, even when I was out of the country. And always available when needed.View moreOlgaWeave Studios – Kai TakGoogle</span>
                    </div>
                    <div class="reviewCard_aboutMore readBtn" onclick="readMore(1)">View more</div>
                  </div>
                </div>
                <div class="reviewCard_estimate">
                  <div class="reviewCard_stars">
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                    <box-icon name='star' type='solid' color='#ffc107'></box-icon>
                  </div>
                  <div class="reviewCard_user">
                    <div class="reviewCard_user_about">
                      <div class="reviewCard_aboutMore">Thomas</div>
                      <div class="reviewCard_user_aboutMore">Weave Studios – Olympic</div>
                    </div>
                    <div class="reviewCard_user_google">
                      <a href="">
                        <img src="assets/icons/social media/google_icon.svg">
                        <div class="reviewCard_user_googleText">Google</div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <img src="assets/imgs/review2.svg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="footer_content">
        <div class="footer_card">
          <div class="content">
            <h2 class="footer_h2">Subscribe<br />Newsletter</h2>
            <div class="card_content">
              <div class="text">
                <h3 class="footer_h3">The Travel</h3>
                <p class="footer_p">
                  Get inspired! Receive travel discounts, tips and behind the
                  scenes stories.
                </p>
              </div>
              <div class="footer_input">
                <input
                  type="email"
                  class="footer_getEmail"
                  placeholder="Your email address" />
                <button class="btn footer_getEmail_btn">Subscribe</button>
              </div>
            </div>
          </div>
          <img
            src="assets/imgs/footer_card_figure.svg"
            class="footer_card_img" />
        </div>
        <div class="row footer_links">
          <div class="icon_links">
            <a href="index.php">
              <img
                src="assets/icons/blackWhite_logo_icon.svg"
                class="footer_logo" />
            </a>
            <div class="socialMedia_links">
              <a href="#">
                <img
                  src="assets/icons/social media/blackFacebook_icon.svg"
                  class="socialMedia_icon" />
              </a>
              <a href="#">
                <img
                  src="assets/icons/social media/twitter_icon.svg"
                  class="socialMedia_icon" />
              </a>
              <a href="#">
                <img
                  src="assets/icons/social media/youtube_icon.svg"
                  class="socialMedia_icon" />
              </a>
              <a href="#">
                <img
                  src="assets/icons/social media/instagram_icon.svg"
                  class="socialMedia_icon" />
              </a>
            </div>
          </div>
          <div class="text_links">
            <div class="column">
              <p class="columnLinks_h">Our Destinations</p>
              <div class="links">
                <a href="#" class="footer_link">Canada</a>
                <a href="#" class="footer_link">Alaksa</a>
                <a href="#" class="footer_link">France</a>
                <a href="#" class="footer_link">Iceland</a>
              </div>
            </div>
            <div class="column">
              <p class="columnLinks_h">Our Activities</p>
              <div class="links">
                <a href="#" class="footer_link">Northern Lights</a>
                <a href="#" class="footer_link">Cruising & sailing</a>
                <a href="#" class="footer_link">Multi-activities</a>
                <a href="#" class="footer_link">Kayaing</a>
              </div>
            </div>
            <div class="column">
              <p class="columnLinks_h">Travel Blogs</p>
              <div class="links">
                <a href="#" class="footer_link">Bali Travel Guide</a>
                <a href="#" class="footer_link">Sri Lanks Travel Guide</a>
                <a href="#" class="footer_link">Peru Travel Guide</a>
                <a href="#" class="footer_link">Bali Travel Guide</a>
              </div>
            </div>
            <div class="column">
              <p class="columnLinks_h">About Us</p>
              <div class="links">
                <a href="#" class="footer_link">Our Story</a>
                <a href="#" class="footer_link">Work with us</a>
              </div>
            </div>
            <div class="column">
              <p class="columnLinks_h">Contact Us</p>
              <div class="links">
                <a href="#" class="footer_link">Our Story</a>
                <a href="#" class="footer_link">Work with us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="/js/search-filter-btn.js"></script>

</html>