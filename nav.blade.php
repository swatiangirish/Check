		<header>
			<!--<ul class="top-nav clearfix text-right">
				<li class="dropdown submenu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						 @if(Cookie::get('city')) {{Cookie::get('city')}} @else Select City @endif 
					</a>
					<ul class="dropdown-menu subitems">
						<li>
							<a href="#" class="loc-city">
								All
							</a>
							<a href="#" class="loc-city" data-latitude="23.035232" data-longitude="72.586459">
								Ahmedabad
							</a>
							<a href="#" class="loc-city" data-latitude="12.966889" data-longitude="77.587050">
								Bengaluru
							</a>
							<a href="#" class="loc-city" data-latitude="30.730770" data-longitude="76.768425">
								Chandigarh
							</a>
							<a href="#" class="loc-city" data-latitude="13.057636" data-longitude="80.203244">
								Chennai
							</a>
							<a href="#" class="loc-city" data-latitude="28.638729" data-longitude="77.205149">
								Delhi
							</a>
							<a href="#" class="loc-city" data-latitude="28.466680" data-longitude="77.022145">
								Gurgaon
							</a>
							<a href="#" class="loc-city" data-latitude="17.401626" data-longitude="78.479007">
								Hyderabad
							</a>
							<a href="#" class="loc-city" data-latitude="22.591308" data-longitude="88.356213">
								Kolkatta
							</a>
							<a href="#" class="loc-city" data-latitude="19.091854" data-longitude="72.873638">
								Mumbai
							</a>
							<a href="#" class="loc-city" data-latitude="28.532056" data-longitude="77.393091">
								Noida
							</a>
							<a href="#" class="loc-city" data-latitude="18.504478" data-longitude="73.864753">
								Pune
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/about">
						About
					</a>
				</li>
				<li>
					<a href="/maker/login">
						Sell with IMI
					</a>				
				</li>
				<li>
					@if(!Auth::check())
					<a href="#" data-toggle="modal" data-target="#login-modal">
						Login
					</a>
					@else
					<a href="/my-account">
						My Account
					</a>
					<a href="/logout">
						Signout
					</a>
					@endif
				</li>
			</ul>-->
			<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown submenu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						 @if(Cookie::get('city')) {{Cookie::get('city')}} @else Select City @endif 
					</a>
					<ul class="dropdown-menu subitems">
						<li>
							<a href="#" class="loc-city">
								All
							</a>
							<a href="#" class="loc-city" data-latitude="23.035232" data-longitude="72.586459">
								Ahmedabad
							</a>
							<a href="#" class="loc-city" data-latitude="12.966889" data-longitude="77.587050">
								Bengaluru
							</a>
							<a href="#" class="loc-city" data-latitude="30.730770" data-longitude="76.768425">
								Chandigarh
							</a>
							<a href="#" class="loc-city" data-latitude="13.057636" data-longitude="80.203244">
								Chennai
							</a>
							<a href="#" class="loc-city" data-latitude="28.638729" data-longitude="77.205149">
								Delhi
							</a>
							<a href="#" class="loc-city" data-latitude="28.466680" data-longitude="77.022145">
								Gurgaon
							</a>
							<a href="#" class="loc-city" data-latitude="17.401626" data-longitude="78.479007">
								Hyderabad
							</a>
							<a href="#" class="loc-city" data-latitude="22.591308" data-longitude="88.356213">
								Kolkatta
							</a>
							<a href="#" class="loc-city" data-latitude="19.091854" data-longitude="72.873638">
								Mumbai
							</a>
							<a href="#" class="loc-city" data-latitude="28.532056" data-longitude="77.393091">
								Noida
							</a>
							<a href="#" class="loc-city" data-latitude="18.504478" data-longitude="73.864753">
								Pune
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/about">
						About
					</a>
				</li>
				<li>
					<a href="/maker/login">
						Sell with IMI
					</a>				
				</li>
				@if(!Auth::check())
				<li>
					<a href="#" data-toggle="modal" data-target="#login-modal">
						Login
					</a>
				
				@else
				<li>
					<a href="/my-account">
						<span>My Account</span>
					</a>
				</li>
				<li>
					<a href="/logout">
						<span>Signout</span>
					</a>
					@endif
				</li>
			</ul>
			</nav>
			<div class="nav-otr">
				<div class="logo-otr">
					<a href="/">
						<img src="{{asset('website/dist/img/logo.png')}}" alt="imi-logo">
					</a>
				</div>
				<button type="button" class="nav-toggle-btn nthbtn">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<button type="button" class="srch-mobile-btn stbtn">
					<svg enable-background="new 0 0 80 80" height="80px" id="Icons" version="1.1" viewBox="0 0 80 80" width="80px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="sis-btn">
						<path class="fill" d="M59.446,55.911L49.337,45.802c1.922-2.64,3.069-5.88,3.069-9.396c0-8.837-7.163-16-16-16s-16,7.163-16,16s7.163,16,16,16  c3.516,0,6.756-1.147,9.396-3.069l10.109,10.109L59.446,55.911z M36.406,47.406c-6.065,0-11-4.935-11-11s4.935-11,11-11  s11,4.935,11,11S42.471,47.406,36.406,47.406z"/>
					</svg>
				</button>
				<div class="search-otr">
					<form method="get" id="search_form" action="/search">
						<div class="search-inr" id="main-search">
							<input class="typeahead srch-inp" name="search_text" placeholder="Search">
							<a href="#" id="btn-search">
								<svg enable-background="new 0 0 80 80" height="80px" id="Icons" version="1.1" viewBox="0 0 80 80" width="80px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="srch-icon-svg">
									<path class="fill" d="M59.446,55.911L49.337,45.802c1.922-2.64,3.069-5.88,3.069-9.396c0-8.837-7.163-16-16-16s-16,7.163-16,16s7.163,16,16,16  c3.516,0,6.756-1.147,9.396-3.069l10.109,10.109L59.446,55.911z M36.406,47.406c-6.065,0-11-4.935-11-11s4.935-11,11-11  s11,4.935,11,11S42.471,47.406,36.406,47.406z"/>
								</svg>
							</a>
						</div>
					</form>
				</div>
				<nav class="main-nav-otr">
					<ul class="main-nav">
					@foreach($categories as $category)
						<li  @if($page == $category->slug) class="active" @endif>
							<a href="/product/category/{{$category->slug}}">
								{{$category->name}}
							</a>
						</li>
					@endforeach
					</ul>
				</nav>
			</div>
		</header>