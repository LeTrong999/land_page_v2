@extends('master')

@section('content')
    @foreach($result as $items)
    <section class="content-first">
        <div class="container">
            <div class="content-top">
                <h1 class="">{{$items[0]->name_cate}}</h1>
            </div>
            <div class="content-body" style="">
                <div class="icon-left-right slide_{{$items[0]->cate_id}}" flag_id="slide_{{$items[0]->cate_id}}">
                    <span class="lt_left">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </span>
                    <span class="lt_right">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div style="display: flex; position: relative; z-index: 10; left: 0; transition: 0.5s" id="slide_{{$items[0]->cate_id}}">
                	
                		@foreach($items as $item)
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lr dec_product">
	                                <span class="title_product">{{$item->name_product}}</span></br>
	                            </div>
	                            <div class="buy_product padding_lr">
	                            	<span style="float: left">
	                            		300.000đ
	                            	</span>
	                            	<span style="float: right;" class="btn btn-danger title_buy">
	                            		Mua ngay
	                            	</span>
	                            </div>
	                        </div>
	                    </div>
	                    

                    	@endforeach()
                    
                </div>
            </div>
        </div>
    </section>
    @endforeach()
    <div class="clearfix"></div>

    <section class="contact-content">
            <div class="row">
                <div class="container">
                    <div class="top">
                        <h1>Liên hệ</h1>
                    </div>
                    <div class="body">
                        <div class="col-md-9 no-padding">
                            <form action="" id="form_contact">
                                <div class="col-md-6 no-padding-left padding_phone_r">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="First Name">
                                    </div>

                                </div>
                                <div class="col-md-6 no-padding-right padding_phone_l">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="pwd" placeholder="Number Phone">
                                    </div>

                                </div>
                                <div class="col-md-12 no-padding">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12 no-padding">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success">Gửi</button>
                                </div>
                                
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="info-com">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                <div>
                                    <span>Working Hours</span>
                                    <p>10am – 6pm (Monday to Friday)</p>
                                </div>
                            </div>
                            <div class="info-com">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <div>
                                    <span>Office Address</span>
                                    <p>QTSC Building 9 Quang Trung <br> Software City Tan Chanh Hiep Ward, District 12, <br> Ho Chi Minh City, Viet Nam</p>
                                </div>
                            </div>
                            <div class="info-com">
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <div>
                                    <span>Phone</span>
                                    <p>Tel: +84 28 7109 2939</p>
                                </div>
                            </div>
                            <div class="info-com">
                                <span><i class="fa fa fa-envelope" aria-hidden="true"></i></span>
                                <div>
                                    <span>Email Address</span>
                                    <p>info@wds.com.sg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@stop
