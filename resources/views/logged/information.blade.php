@extends('logged.layout')
@section('content')
            <link rel="stylesheet" href="./bmt/login.css">
            <link rel="stylesheet" href="./bmt/register.css">
            <link rel="stylesheet" href="./bmt/information.css">
            <div id="body-website-login">
                <div class="body-website-login-list">
                    <div class="container page_customer_account">
                        <section class="signup account-page mr-bottom-20">
                            <div class="container">
                                <div class="row">
                                    <div class="Notification-add">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="row">					
                                            <div class="col-xs-12 col-sm-12 col-lg-12">						
                                                <div class="page-title">
                                                    <h1 class="title-head widget-title">Thông tin tài khoản</h1>
                                                </div>
                                                <div class="form-signup form-signup-name" > 
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-md-push-9 col-lg-3 col-lg-push-9">
                                                <div class="block block-account margin-bottom-20">
                                                    
                                                    <div class="block-title"><h2 class="widget-title">Thông tin khách hàng</h2></div>
                                                    <div class="divider-full-1"></div>
                                                    <div class="block-content form-signup block-edit-padding">
                                                        <form action="/information_edit/{{$customer->id}}" method = "POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="change-information-all"><svg   width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.86 244.44" fill="#E95221"><path d="M249.31,163.93H225.14a16.46,16.46,0,0,0-13.49,7l-16.9,24.18a16.46,16.46,0,0,1-27.12-.18l-16.17-23.82a16.48,16.48,0,0,0-13.62-7.22H114.11a55.34,55.34,0,0,0-55.33,55.34v24.55A8.23,8.23,0,0,0,67,252.06h229.4a8.24,8.24,0,0,0,8.23-8.24V219.27A55.34,55.34,0,0,0,249.31,163.93Zm-67.57-20.58a67.87,67.87,0,1,0-67.86-67.87A67.86,67.86,0,0,0,181.74,143.35Z" transform="translate(-58.78 -7.61)"></path></svg>
                                                            <b>Họ tên: </b><input name = "fullname" class="change-information" type = "text" value = "{{$customer->customer_fullname}}">	</div>
                                                            <div class="change-information-all"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.7083 11.9274L13.0454 10.8187L11.5672 9.83339C11.2819 9.64357 10.8985 9.7058 10.6878 9.97615L9.77312 11.1521C9.57663 11.4073 9.22316 11.4806 8.94139 11.3246C8.32071 10.9793 7.58674 10.6542 5.96729 9.03271C4.34783 7.41118 4.02068 6.67929 3.67542 6.05861C3.51941 5.77684 3.59274 5.42338 3.84791 5.22691L5.02385 4.31219C5.29417 4.1016 5.35643 3.7182 5.16661 3.43288L4.21154 2.00013L3.07258 0.291677C2.87873 0.000879503 2.49066 -0.0864242 2.19096 0.0933101L0.877418 0.881329C0.522432 1.09048 0.261487 1.42821 0.148637 1.8245C-0.210569 3.13415 -0.28299 6.02317 4.34704 10.6532C8.97707 15.2832 11.8658 15.2106 13.1755 14.8513C13.5718 14.7385 13.9095 14.4776 14.1186 14.1225L14.9067 12.809C15.0864 12.5093 14.9991 12.1213 14.7083 11.9274Z" fill="#E95221"></path> <path d="M8.53399 2.32747C10.961 2.33017 12.9278 4.29697 12.9305 6.72399C12.9305 6.86681 13.0463 6.98262 13.1891 6.98262C13.3319 6.98262 13.4478 6.86684 13.4478 6.72399C13.4448 4.01144 11.2466 1.81323 8.53402 1.81024C8.3912 1.81024 8.27539 1.92602 8.27539 2.06887C8.27536 2.21166 8.39114 2.32747 8.53399 2.32747Z" fill="#E95221"></path> <path d="M8.53402 3.87932C10.1044 3.88117 11.377 5.15375 11.3788 6.72411C11.3788 6.86693 11.4946 6.98274 11.6374 6.98274C11.7803 6.98274 11.8961 6.86696 11.8961 6.72411C11.8939 4.8682 10.39 3.3642 8.53402 3.36206C8.3912 3.36206 8.27539 3.47784 8.27539 3.62069C8.27539 3.76354 8.39117 3.87932 8.53402 3.87932Z" fill="#E95221"></path> <path d="M8.53399 5.43087C9.2478 5.43172 9.82623 6.01015 9.82708 6.72396C9.82708 6.86678 9.94286 6.98259 10.0857 6.98259C10.2285 6.98259 10.3443 6.86681 10.3443 6.72396C10.3432 5.72462 9.53336 4.91478 8.53402 4.91364C8.3912 4.91364 8.27539 5.02941 8.27539 5.17227C8.27536 5.31509 8.39114 5.43087 8.53399 5.43087Z" fill="#E95221"></path> </svg>
                                                            <b>Số ĐT: </b><input name = "phone" class="change-information" type = "text" value = "{{$customer->customer_phone}}">									
                                                            </div>
                                                            <div class="change-information-all"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.00033 0.5C2.77533 0.5 0.166992 3.10833 0.166992 6.33333C0.166992 10.7083 6.00033 15.5 6.00033 15.5C6.00033 15.5 11.8337 10.7083 11.8337 6.33333C11.8337 3.10833 9.22533 0.5 6.00033 0.5ZM6.00033 8.83333C7.38104 8.83333 8.50033 7.71405 8.50033 6.33333C8.50033 4.95262 7.38104 3.83333 6.00033 3.83333C4.61961 3.83333 3.50033 4.95262 3.50033 6.33333C3.50033 7.71405 4.61961 8.83333 6.00033 8.83333Z" fill="#E95221"></path> </svg> 
                                                            <b>Địa chỉ: </b><input name = "address" class="change-information" type = "text" value = "{{$customer->customer_address}}">								
                                                            </div>
                                                        
                                                            <div class="margin-top-20"><button type = "submit" class="btn btn-blues btn-full"><i class="fa fa-edit"></i> Sửa thông tin</button></div>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-9 col-md-pull-3 col-lg-9 col-lg-pull-3 col-right-ac">
                                                <h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>
                                                <div class="my-account">
                                                    <div class="dashboard">
                                                        <div class="recent-orders">
                        
                                                            <div class="table-responsive-block tab-all" style="overflow-x:auto;">
                                                                <table class="table table-cart table-order" id="my-orders-table">
                                                                    <thead class="thead-default">
                                                                        <tr>
                                                                            <th>Đơn hàng</th>
                                                                            <th>Ngày</th>
                                                                            <th>Địa chỉ</th>
                                                                            <th>Giá trị</th>
                                                                            <th>Tình trạng</th>
                                                                        </tr>
                                                                    </thead>
                                
                                                                    <tbody>
                                                                        @foreach($order as $order)
                                                                        <tr>
                                                                            <td text-align="center"><p>Vợt cầu lông</p></td>
                                                                            <td text-align="center"><p>{{ $order->date_order }}</p></td>
                                                                            <td text-align="center"><p>{{ $order->address_customer_order }}</p></td>
                                                                            <td text-align="center">{{number_format($order->prices_customer_order,0,",",".")}} <p style = "display: inline;">đ</p></></td>
                                                                            <td text-align="center"><p>Peding</p></td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                
                                
                                                                </table>
                                                            
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>            
                    </div>
                </div>
            </div>
@endsection