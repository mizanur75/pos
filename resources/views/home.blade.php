@extends('layouts.app')

@section('content')
<div id="content">
    <div class="grid_container">
        <div class="grid_12 full_block">
            <div class="widget_wrap">
                <div class="widget_content">
                    <div class="data_widget black_g chart_wrap">
                        <div id="chart1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="clear"></span>
        <div class="social_activities">
            <div class="activities_s">
                <div class="block_label">
                    Products<span>54854</span>
                </div>
                <div class="activities_chart">
                    <span class="activities_chart">100,150,130,100,250,280,350,250,400,450,280,350,250,400,</span>
                </div>
            </div>
            <div class="activities_s">
                <div class="block_label">
                    Category<span>80%</span>
                </div>
                <div class="visit_chart">
                    <span class="activities_chart">500,450,100,500,550, 400,300,550,480,500,320,400,450</span>
                </div>
            </div>
            <div class="comments_s">
                <div class="block_label">
                    Vendors<span>17000</span>
                </div>
                <span class="badge_icon comment_sl"></span>
            </div>
            <div class="views_s">
                <div class="block_label">
                    Customers<span>1500</span>
                </div>
                <span class="badge_icon bank_sl"></span>
            </div>
            <div class="user_s">
                <div class="block_label">
                    Invoice<span>12000</span>
                </div>
                <span class="badge_icon customers_sl"></span>
            </div>
        </div>
    </div>
</div>
@endsection
