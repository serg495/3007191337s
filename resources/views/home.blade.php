<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">

    <title>address ::: user office ::: foodclub</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="cbc">
    <div class="main">
        <header>
            <div class="center_box">
                <div class="wrapper">

                    <div class="logo_box">
                        <a href="index.html"><img src="img/logo.png" alt="foodclub" /></a>
                    </div>

                    <div class="lng_box">
                        <a href="#" class="flag_ar"></a>
                    </div>

                    <div class="orders_counter">
                        <span class="num">2<span class="line"></span></span>
                        <span class="num">1<span class="line"></span></span>
                        <span class="num">7<span class="line"></span></span>
                        <span class="num">0<span class="line"></span></span>

                        <span class="label">orders<br/>today</span>
                    </div>

                    <div class="r_box">
                        <a href="tel:8800117117" class="h_phone"><span class="ico"></span><span>800 117-117</span></a>

                        <div class="upan">
                            <div class="notice">
                                <a href="#" class="ico_notice nftoggle"></a>

                                <nav class="utnav">
                                    <ul>
                                        <li class="item">
                                            <span class="ico ico_1"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_2"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_3"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li><a href="#" class="more">Show more notifications</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="navbox">
                                <a href="#" class="midbox nftoggle">
                                    <img src="{{ asset('imgc/user_ava_1_40.jpg') }}" alt="" />
                                    <span class="warrd"></span>
                                </a>
                                <nav class="utnav">
                                    <ul>
                                        <li class="points">600 points</li>
                                        <li class="sepor"></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Orders</a></li>
                                        <li><a href="#">Address</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li class="sepor"></li>
                                        <li><a href="#" class="logout">Log Out</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <div class="center_box cb">
            <div class="uo_tabs cf">
                <a href="#"><span>profile</a>
                <a href="#"><span>Reviews</span></a>
                <a href="#"><span>orders</span></a>
                <a href="#" class="active"><span>My Address</span></a>
                <a href="#"><span>Settings</span></a>
            </div>
            <div class="page_content bg_gray">
                <div class="uo_header">
                    <div class="wrapper cf">
                        <div class="wbox ava">
                            <figure><img src="{{ asset('imgc/user_ava_1_140.jpg') }}" alt="Helena Afrassiabi" /></figure>
                        </div>
                        <div class="main_info">
                            <h1>Helena Afrassiabi</h1>
                            <div class="midbox">
                                <h4>560 points</h4>
                                <div class="info_nav">
                                    <a href="#">Get Free Points</a>
                                    <span class="sepor"></span>
                                    <a href="#">Win iPad</a>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="item">
                                    <div class="num">30</div>
                                    <div class="title">total orders</div>
                                </div>
                                <div class="item">
                                    <div class="num">14</div>
                                    <div class="title">total reviews</div>
                                </div>
                                <div class="item">
                                    <div class="num">0</div>
                                    <div class="title">total gifts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uo_body">
                    <div class="wrapper">
                        <div class="uofb cf">
                            <div class="l_col adrs">
                                <h2>Add New Address</h2>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        <h2 style="color: green;">{{ session('status') }}</h2>
                                    </div>
                                @endif
                                <form action="{{ route('address.store') }}" method="POST">
                                    @csrf
                                    <div class="field">
                                        <label for="name">Name *</label>
                                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="vl_empty" />
                                    </div>
                                    <div class="field">
                                        <label>Your city *</label>
                                        <select name="city_id" class="vl_empty">
                                            <option disabled selected></option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field">
                                        <label>Your area *</label>
                                        <select name="area_id">
                                            <option disabled selected></option>
                                            @foreach($areas as $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field">
                                        <label>Street</label>
                                        <input type="text" value="{{ old('street') }}" name="street" class="vl_empty" />
                                    </div>
                                    <div class="field">
                                        <label>House # </label>
                                        <input type="text" name="house" value="{{ old('house') }}" placeholder="House Name / Number" />
                                    </div>

                                    <div class="field">
                                        <label class="pos_top">Additional information</label>
                                        <textarea name="additional_info">{{ old('additional_info') }}</textarea>
                                    </div>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li style="color: red">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="field">
                                        <input type="submit" value="add address" class="green_btn" />
                                    </div>
                                </form>
                            </div>

                            <div class="r_col">
                                <h2>My Addresses</h2>
                                <div class="uo_adr_list">
                                    @forelse($addresses as $address)
                                        <div class="item">
                                            <h3>{{ $address->name }}</h3>
                                            <p>{{ $address->getFullAddress() }}</p>
                                            <p>{{ $address->additional_info }}</p>
                                            <div class="actbox">
                                                <form action="{{ route('address.destroy', $address->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="bcross"></button>
                                                </form>
                                            </div>
                                        </div>
                                    @empty
                                        <p>Your addresses are not added yet.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="center_box">
            <div class="wrapper">

                <nav class="f_nav">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_1"></span></span>
                                <span class="title">Rewards Program</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_2"></span></span>
                                <span class="title">monthly lottery</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_3"></span></span>
                                <span class="title">Restaurant Owners</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_4"></span></span>
                                <span class="title">about foodclub</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bt_box">
            <div class="center_box">
                <div class="wrapper">
                    <div class="soc_link">
                        <a href="#" class="apple"></a>
                        <a href="#" class="android"></a>
                        <a href="#" class="email"></a>
                        <a href="#" class="fb"></a>
                    </div>
                    <div class="copyright">
                        <div>© 2014 Zomlex Inc. All rights reserved.</div>
                        <nav>
                            <a href="#">Partner Agreement</a>
                            <span>|</span>
                            <a href="#">User Agreement</a>
                            <span>|</span>
                            <a href="#">FAQ</a>
                            <span>|</span>
                            <a href="#">Careers</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>