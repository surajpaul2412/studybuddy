@extends('layouts.backend.app')

@section('content')
<div class="container-xl">
  <div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <h2 class="page-title">
          University Dashboard
        </h2>
      </div>
    </div>
  </div>
</div>

<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards">
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="subheader">Sales</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#">Last 7 days</a>
                    <a class="dropdown-item" href="#">Last 30 days</a>
                    <a class="dropdown-item" href="#">Last 3 months</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="h1 mb-3">75%</div>
            <div class="d-flex mb-2">
              <div>Conversion rate</div>
              <div class="ms-auto">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                </span>
              </div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span class="visually-hidden">75% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="subheader">Sales</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#">Last 7 days</a>
                    <a class="dropdown-item" href="#">Last 30 days</a>
                    <a class="dropdown-item" href="#">Last 3 months</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="h1 mb-3">75%</div>
            <div class="d-flex mb-2">
              <div>Conversion rate</div>
              <div class="ms-auto">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                </span>
              </div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span class="visually-hidden">75% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="subheader">Sales</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#">Last 7 days</a>
                    <a class="dropdown-item" href="#">Last 30 days</a>
                    <a class="dropdown-item" href="#">Last 3 months</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="h1 mb-3">75%</div>
            <div class="d-flex mb-2">
              <div>Conversion rate</div>
              <div class="ms-auto">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                </span>
              </div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span class="visually-hidden">75% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="subheader">Sales</div>
              <div class="ms-auto lh-1">
                <div class="dropdown">
                  <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item active" href="#">Last 7 days</a>
                    <a class="dropdown-item" href="#">Last 30 days</a>
                    <a class="dropdown-item" href="#">Last 3 months</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="h1 mb-3">75%</div>
            <div class="d-flex mb-2">
              <div>Conversion rate</div>
              <div class="ms-auto">
                <span class="text-green d-inline-flex align-items-center lh-1">
                  7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                </span>
              </div>
            </div>
            <div class="progress progress-sm">
              <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <span class="visually-hidden">75% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card" style="height: calc(24rem + 10px)">
          <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="divide-y">
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar">JL</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                    </div>
                    <div class="text-muted">yesterday</div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="badge bg-primary"></div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="badge bg-primary"></div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
                    </div>
                    <div class="text-muted">today</div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="badge bg-primary"></div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
                    </div>
                    <div class="text-muted">4 days ago</div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="badge bg-primary"></div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Maryjo Lebarree</strong> liked your photo.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar">EP</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
                    </div>
                    <div class="text-muted">yesterday</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
                    </div>
                    <div class="text-muted">4 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar">HS</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
                    </div>
                    <div class="text-muted">today</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                    </div>
                    <div class="text-muted">yesterday</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Leesa Beaty</strong> posted new video.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Perren Keemar</strong> and 3 others followed you.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar">SA</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Thatcher Keel</strong> created a profile.
                    </div>
                    <div class="text-muted">3 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
                    </div>
                    <div class="text-muted">4 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar">AA</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
                    </div>
                    <div class="text-muted">2 days ago</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row row-cards">
          <div class="col-12">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      132 Sales
                    </div>
                    <div class="text-muted">
                      12 waiting payments
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="19" r="2" /><circle cx="17" cy="19" r="2" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      78 Orders
                    </div>
                    <div class="text-muted">
                      32 shipped
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-yellow text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/users -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      1352 Members
                    </div>
                    <div class="text-muted">
                      163 registered today
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      623 Shares
                    </div>
                    <div class="text-muted">
                      16 today
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-sm">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                    </span>
                  </div>
                  <div class="col">
                    <div class="font-weight-medium">
                      132 Likes
                    </div>
                    <div class="text-muted">
                      21 today
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Invoices</h3>
          </div>
          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="text-muted">
                Show
                <div class="mx-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                </div>
                entries
              </div>
              <div class="ms-auto text-muted">
                Search:
                <div class="ms-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
              <thead>
                <tr>
                  <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                  <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                  </th>
                  <th>Invoice Subject</th>
                  <th>Client</th>
                  <th>VAT No.</th>
                  <th>Created</th>
                  <th>Status</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001401</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                  <td>
                    <span class="flag flag-country-us"></span>
                    Carlson Limited
                  </td>
                  <td>
                    87956621
                  </td>
                  <td>
                    15 Dec 2017
                  </td>
                  <td>
                    <span class="badge bg-success me-1"></span> Paid
                  </td>
                  <td>$887</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001402</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                  <td>
                    <span class="flag flag-country-gb"></span>
                    Adobe
                  </td>
                  <td>
                    87956421
                  </td>
                  <td>
                    12 Apr 2017
                  </td>
                  <td>
                    <span class="badge bg-warning me-1"></span> Pending
                  </td>
                  <td>$1200</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001403</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                  <td>
                    <span class="flag flag-country-de"></span>
                    Bluewolf
                  </td>
                  <td>
                    87952621
                  </td>
                  <td>
                    23 Oct 2017
                  </td>
                  <td>
                    <span class="badge bg-warning me-1"></span> Pending
                  </td>
                  <td>$534</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001404</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                  <td>
                    <span class="flag flag-country-br"></span>
                    Salesforce
                  </td>
                  <td>
                    87953421
                  </td>
                  <td>
                    2 Sep 2017
                  </td>
                  <td>
                    <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                  </td>
                  <td>$1500</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001405</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                  <td>
                    <span class="flag flag-country-pl"></span>
                    Printic
                  </td>
                  <td>
                    87956621
                  </td>
                  <td>
                    29 Jan 2018
                  </td>
                  <td>
                    <span class="badge bg-danger me-1"></span> Paid Today
                  </td>
                  <td>$648</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001406</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                  <td>
                    <span class="flag flag-country-br"></span>
                    Tabdaq
                  </td>
                  <td>
                    87956621
                  </td>
                  <td>
                    4 Feb 2018
                  </td>
                  <td>
                    <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                  </td>
                  <td>$300</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001407</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a></td>
                  <td>
                    <span class="flag flag-country-us"></span>
                    Apple
                  </td>
                  <td>
                    87956621
                  </td>
                  <td>
                    22 Mar 2018
                  </td>
                  <td>
                    <span class="badge bg-success me-1"></span> Paid Today
                  </td>
                  <td>$2500</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                  <td><span class="text-muted">001408</span></td>
                  <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                  <td>
                    <span class="flag flag-country-pl"></span>
                    Tookapic
                  </td>
                  <td>
                    87956621
                  </td>
                  <td>
                    13 May 2018
                  </td>
                  <td>
                    <span class="badge bg-success me-1"></span> Paid Today
                  </td>
                  <td>$940</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                          Action
                        </a>
                        <a class="dropdown-item" href="#">
                          Another action
                        </a>
                      </div>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
            <ul class="pagination m-0 ms-auto">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                  <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                  prev
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection