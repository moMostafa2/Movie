@extends('main.layout')
@section('content')

<!-- page title -->
<section class="section section--first section--bg" data-bg="{{asset('assets/main/img/section/section.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h1 class="section__title">My FlixGo</h1>
					<!-- end section title -->

					<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Profile</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end page title -->

<!-- content -->
<div class="content">
	<!-- profile -->
	<div class="profile">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="profile__content">
						<div class="profile__user">
							<div class="profile__avatar">
								<img src="{{asset('assets/main/img/user.svg')}}" alt="">
							</div>
							<div class="profile__meta">
								<h3>Username</h3>
								<span>FlixGo ID: 23562</span>
							</div>
						</div>

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Profile">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->

						<button class="profile__logout" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg>
							<span>Logout</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end profile -->

	<div class="container">
		<!-- content tabs -->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				<div class="row row--grid">
					<!-- stats -->
					<div class="col-12 col-sm-6 col-xl-3">
						<div class="stats">
							<span>Premium plan</span>
							<p>$19.99</p>
							<img src="{{asset('assets/main/img/credit-card.svg')}}" alt="">
						</div>
					</div>
					<!-- end stats -->

					<!-- stats -->
					<div class="col-12 col-sm-6 col-xl-3">
						<div class="stats">
							<span>Films watched</span>
							<p>1 172</p>
							<img src="{{asset('assets/main/img/film.svg')}}" alt="">
						</div>
					</div>
					<!-- end stats -->

					<!-- stats -->
					<div class="col-12 col-sm-6 col-xl-3">
						<div class="stats">
							<span>Your comments</span>
							<p>2 573</p>
							<img src="{{asset('assets/main/img/comments.svg')}}" alt="">
						</div>
					</div>
					<!-- end stats -->

					<!-- stats -->
					<div class="col-12 col-sm-6 col-xl-3">
						<div class="stats">
							<span>Your reviews</span>
							<p>1 021</p>
							<img src="{{asset('assets/main/img/star-half-alt.svg')}}" alt="">
						</div>
					</div>
					<!-- end stats -->

					<!-- dashbox -->
					<div class="col-12 col-xl-6">
						<div class="dashbox">
							<div class="dashbox__title">
								<h3><img src="{{asset('assets/main/img/film.svg')}}" alt=""> Movies for you</h3>

								<div class="dashbox__wrap">
									<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
									<a class="dashbox__more" href="catalog.html">View All</a>
								</div>
							</div>

							<div class="dashbox__table-wrap">
								<table class="main__table main__table--dash">
									<thead>
										<tr>
											<th>ID</th>
											<th>TITLE</th>
											<th>CATEGORY</th>
											<th>RATING</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="main__table-text">321</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">Movie</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.2</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">54</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">Movie</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.1</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">670</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">TV Series</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.0</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">241</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting 2</a></div>
											</td>
											<td>
												<div class="main__table-text">TV Series</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">8.9</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">22</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">TV Series</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">8.9</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end dashbox -->

					<!-- dashbox -->
					<div class="col-12 col-xl-6">
						<div class="dashbox">
							<div class="dashbox__title">
								<h3><img src="{{asset('assets/main/img/star-half-alt.svg')}}" alt=""> Latest reviews</h3>

								<div class="dashbox__wrap">
									<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg></a>
									<a class="dashbox__more" href="reviews.html">View All</a>
								</div>
							</div>

							<div class="dashbox__table-wrap">
								<table class="main__table main__table--dash">
									<thead>
										<tr>
											<th>ID</th>
											<th>ITEM</th>
											<th>AUTHOR</th>
											<th>RATING</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="main__table-text">23</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">7.2</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">24</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">6.3</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">25</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">8.4</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">26</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">9.0</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">27</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate">7.7</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end dashbox -->
				</div>
			</div>

			<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
				<div class="row row--grid">
					<!-- price -->
					<div class="col-12 col-md-6 order-md-1 col-lg-4 order-lg-1">
						<div class="price price--profile">
							<div class="price__item price__item--first"><span>Basic</span> <span>Free</span></div>
							<div class="price__item"><span>7 days</span></div>
							<div class="price__item"><span>720p Resolution</span></div>
							<div class="price__item"><span>Limited Availability</span></div>
							<div class="price__item"><span>Desktop Only</span></div>
							<div class="price__item"><span>Limited Support</span></div>
							<a href="#" class="price__btn">Choose Plan</a>
						</div>
					</div>
					<!-- end price -->

					<!-- price -->
					<div class="col-12 order-md-3 col-lg-4 order-lg-2">
						<div class="price price--profile price--premium">
							<div class="price__item price__item--first"><span>Premium</span> <span>$19.99</span></div>
							<div class="price__item"><span>1 Month</span></div>
							<div class="price__item"><span>Full HD</span></div>
							<div class="price__item"><span>Lifetime Availability</span></div>
							<div class="price__item"><span>TV & Desktop</span></div>
							<div class="price__item"><span>24/7 Support</span></div>
							<a href="#" class="price__btn">Choose Plan</a>
						</div>
					</div>
					<!-- end price -->

					<!-- price -->
					<div class="col-12 col-md-6 order-md-2 col-lg-4 order-lg-3">
						<div class="price price--profile">
							<div class="price__item price__item--first"><span>Cinematic</span> <span>$39.99</span></div>
							<div class="price__item"><span>2 Months</span></div>
							<div class="price__item"><span>Ultra HD</span></div>
							<div class="price__item"><span>Lifetime Availability</span></div>
							<div class="price__item"><span>Any Device</span></div>
							<div class="price__item"><span>24/7 Support</span></div>
							<a href="#" class="price__btn">Choose Plan</a>
						</div>
					</div>
					<!-- end price -->
				</div>
			</div>

			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
				<div class="row row--grid">
					<!-- details form -->
					<div class="col-12 col-lg-6">
						<form action="#" class="profile__form">
							<div class="row">
								<div class="col-12">
									<h4 class="profile__title">Profile details</h4>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="username">Username</label>
										<input id="username" type="text" name="username" class="profile__input" placeholder="User 123">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="email">Email</label>
										<input id="email" type="text" name="email" class="profile__input" placeholder="email@email.com">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="firstname">First Name</label>
										<input id="firstname" type="text" name="firstname" class="profile__input" placeholder="John">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="lastname">Last Name</label>
										<input id="lastname" type="text" name="lastname" class="profile__input" placeholder="Doe">
									</div>
								</div>

								<div class="col-12">
									<button class="profile__btn" type="button">Save</button>
								</div>
							</div>
						</form>
					</div>
					<!-- end details form -->

					<!-- password form -->
					<div class="col-12 col-lg-6">
						<form action="#" class="profile__form">
							<div class="row">
								<div class="col-12">
									<h4 class="profile__title">Change password</h4>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="oldpass">Old Password</label>
										<input id="oldpass" type="password" name="oldpass" class="profile__input">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="newpass">New Password</label>
										<input id="newpass" type="password" name="newpass" class="profile__input">
									</div>
								</div>

								<div class="col-12 col-md-6 col-lg-12 col-xl-6">
									<div class="profile__group">
										<label class="profile__label" for="confirmpass">Confirm New Password</label>
										<input id="confirmpass" type="password" name="confirmpass" class="profile__input">
									</div>
								</div>

								<div class="col-12">
									<button class="profile__btn" type="button">Change</button>
								</div>
							</div>
						</form>
					</div>
					<!-- end password form -->
				</div>
			</div>
		</div>
		<!-- end content tabs -->
	</div>
</div>
<!-- end content -->
@endsection
