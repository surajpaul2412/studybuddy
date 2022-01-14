@extends('layouts.frontend.app')

@section('metas')
<title>Pricing | Fly</title>
@endsection

@section('content')
<section class="page_heading_section pricing_heading">
    <div class="container">
        <h1 class="title">Pricing</h1>
        @include('layouts.frontend.partials.counter')
    </div>
</section>

<section class="pricing_content">
    <div class="container">
        <div class="heading_row">
            <div class="left_col">
                <h3>What Plan Fits you best?</h3>
                <p>No contracts. No surprise fees.</p>
            </div>

            <div class="right_col">
                <ul
                    class="nav nav-tabs custom_toggle_btns"
                    id="myTab"
                    role="tablist"
                    position="0"
                >
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link button active"
                            id="home-tab"
                            data-toggle="tab"
                            href="#monthly"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true"
                            >Monthly</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link button"
                            id="profile-tab"
                            data-toggle="tab"
                            href="#yearly"
                            role="tab"
                            aria-controls="profile"
                            aria-selected="false"
                            >Yearly</a
                        >
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade show active"
                id="monthly"
                role="tabpanel"
                aria-labelledby="home-tab"
            >
                <div class="row plans_row mx_-20">
                    <div class="col-md-4 single_plan px_20">
                        <div class="box">
                            <p class="price">
                                <strong>$20</strong> /month
                            </p>
                            <h5 class="name">Freelancer</h5>

                            <ul class="offers">
                                <li>All limited links</li>
                                <li>Own analytics platform</li>
                                <li>Chat support</li>
                                <li>Optimize hashtags</li>
                                <li>Unlimited users</li>
                            </ul>

                            <button class="button plan_btn">
                                Choose Plan
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 single_plan px_20">
                        <div class="box active">
                            <p class="price">
                                <strong>$100</strong> /month
                            </p>
                            <h5 class="name">Professional</h5>

                            <ul class="offers">
                                <li>All limited links</li>
                                <li>Own analytics platform</li>
                                <li>Chat support</li>
                                <li>Optimize hashtags</li>
                                <li>Unlimited users</li>
                            </ul>

                            <button class="button plan_btn">
                                Choose Plan
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 single_plan px_20">
                        <div class="box">
                            <p class="price">
                                <strong>$200</strong> /month
                            </p>
                            <h5 class="name">Business</h5>

                            <ul class="offers">
                                <li>All limited links</li>
                                <li>Own analytics platform</li>
                                <li>Chat support</li>
                                <li>Optimize hashtags</li>
                                <li>Unlimited users</li>
                            </ul>

                            <button class="button plan_btn">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="yearly"
                role="tabpanel"
                aria-labelledby="profile-tab"
            >
                <div class="row plans_row mx_-20">
                    <div class="col-md-4 single_plan px_20">
                        <div class="box">
                            <p class="price">
                                <strong>$200</strong> /year
                            </p>
                            <h5 class="name">Freelancer</h5>

                            <ul class="offers">
                                <li>All limited links</li>
                                <li>Own analytics platform</li>
                                <li>Chat support</li>
                                <li>Optimize hashtags</li>
                                <li>Unlimited users</li>
                            </ul>

                            <button class="button plan_btn">
                                Choose Plan
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 single_plan px_20">
                        <div class="box active">
                            <p class="price">
                                <strong>$1000</strong> /year
                            </p>
                            <h5 class="name">Professional</h5>

                            <ul class="offers">
                                <li>All limited links</li>
                                <li>Own analytics platform</li>
                                <li>Chat support</li>
                                <li>Optimize hashtags</li>
                                <li>Unlimited users</li>
                            </ul>

                            <button class="button plan_btn">
                                Choose Plan
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 single_plan px_20">
                        <div class="box">
                            <p class="price">
                                <strong>$2000</strong> /year
                            </p>
                            <h5 class="name">Business</h5>

                            <ul class="offers">
                                <li>All limited links</li>
                                <li>Own analytics platform</li>
                                <li>Chat support</li>
                                <li>Optimize hashtags</li>
                                <li>Unlimited users</li>
                            </ul>

                            <button class="button plan_btn">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection