@extends('dashboard.master')

@section('title')
	Customer Details
@endsection

@section('content')
<main id="main" class="main">
    <div class="pagetitle mb-4">
      <h1> <i class="bi bi-arrow-left me-2"></i>Customer Details</h1>
    </div>
	<!-- End Page Title -->

	<section class="customer-details-section">
		<div class="customer-user-details">
			<div class="d-flex flex-column flex-lg-row align-items-start justify-content-between gap-3">
				<div class="d-flex d-flex align-items-center justify-content-start gap-2">
					<img src="{{ asset('images/user-img.png') }}" class="img-fluid" width="45px" alt="user img" />
					<div>
						<h2 class="mb-0">Jane Price</h2>
						<p class="mb-0 d-flex"><i class="bi bi-geo-alt-fill"></i>Netherlands</p>
					</div>
					<div class="tail-green-tag ms-3">
						Free Trial
					</div>
				</div>
				<div>
					<label class="d-block mb-2">ACCOUNT STATUS</label>
					<!-- <div class="btn-group action-btn">
						<button type="button" class="btn btn-secondary one"><i class="bi bi-dot"></i> Action</button>
						<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split two" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
						</button>
						<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#"><i class="bi bi-dot"></i> Active</a></li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-dot"></i> InAcive</a></li>
						</ul>
					</div> -->
					<div class="dropdown">
            <select id="account-status" class="dropdown-select">
                <option value="active"><i class="bi bi-dot"></i> Active</option>
                <option value="inactive"><i class="bi bi-dot"></i> Inactive</option>
                <option value="suspended"><i class="bi bi-dot"></i> Suspended</option>
            </select>
        </div>
				</div>
			</div>
			<div class="d-flex flex-column flex-lg-row mt-5 mt-lg-0">
				<div class="border-end pe-0 pe-lg-5 border-resp-none">
					<h3 class="mb-1">Company Name</h3>
					<span>Pfeffer - J</span>
				</div>
				<div class="border-end px-0 px-lg-5 border-resp-none">
					<h3 class="mb-1">Email</h3>
					<span>stuart31@gmail.com</span>
				</div>
				<div class="border-end px-0 px-lg-5 border-resp-none">
					<h3 class="mb-1">Phone</h3>
					<span>833-789-777</span>
				</div>
				<div class="px-0 px-lg-5 border-resp-none">
					<h3 class="mb-1">Industry</h3>
					<span>Software</span>
				</div>
			</div>
		</div>
		<div class="mt-5 customer-details-tabs">
			<ul class="nav nav-pills mb-3 gap-5" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="pills-subscription-tab" data-bs-toggle="pill" data-bs-target="#pills-subscription" type="button" role="tab" aria-controls="pills-subscription" aria-selected="true"><i class="bi bi-credit-card me-2"></i> Subscription</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-notes-tab" data-bs-toggle="pill" data-bs-target="#pills-notes" type="button" role="tab" aria-controls="pills-notes" aria-selected="false"><i class="bi bi-files me-2"></i> Notes</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-invoice-tab" data-bs-toggle="pill" data-bs-target="#pills-invoice" type="button" role="tab" aria-controls="pills-invoice" aria-selected="false"><i class="bi bi-receipt me-2"></i> Invoice History</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="pills-submission-tab" data-bs-toggle="pill" data-bs-target="#pills-submission" type="button" role="tab" aria-controls="pills-submission" aria-selected="false"><i class="bi bi-person-badge me-2"></i> User Submission Changes</button>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-subscription" role="tabpanel" aria-labelledby="pills-subscription-tab" tabindex="0">
				<div class="d-flex flex-column flex-lg-row gap-3">
					<div class="customer-details-card">
						<h4>TOTAL USERS</h4>
						<h5>6</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>TOTAL GOALS</h4>
						<h5>7</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>LAST ACCOUNT ACTIVITY</h4>
						<h5>3/31/24</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>ACCOUNT START</h4>
						<h5>7</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>DEVICE LOGGED IN</h4>
						<h5>3</h5>
						<a href="#">View All </a>
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="pills-notes-tab" tabindex="0">
				<div class="d-flex flex-column flex-lg-row gap-3">
					<div class="customer-details-card">
						<h4>TOTAL USERS</h4>
						<h5>6</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>TOTAL GOALS</h4>
						<h5>7</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>LAST ACCOUNT ACTIVITY</h4>
						<h5>3/31/24</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>ACCOUNT START</h4>
						<h5>7</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>DEVICE LOGGED IN</h4>
						<h5>3</h5>
						<a href="#">View All </a>
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-invoice" role="tabpanel" aria-labelledby="pills-invoice-tab" tabindex="0">
				<div class="d-flex flex-column flex-lg-row gap-3">
					<div class="customer-details-card">
						<h4>TOTAL USERS</h4>
						<h5>6</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>TOTAL GOALS</h4>
						<h5>7</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>LAST ACCOUNT ACTIVITY</h4>
						<h5>3/31/24</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>ACCOUNT START</h4>
						<h5>7</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>DEVICE LOGGED IN</h4>
						<h5>3</h5>
						<a href="#">View All </a>
					</div>
				</div>
				</div>
				<div class="tab-pane fade" id="pills-submission" role="tabpanel" aria-labelledby="pills-submission-tab" tabindex="0">
				<div class="d-flex flex-column flex-lg-row gap-3">
					<div class="customer-details-card">
						<h4>TOTAL USERS</h4>
						<h5>6</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>TOTAL GOALS</h4>
						<h5>7</h5>
						<a href="#">View All </a>
					</div>
					<div class="customer-details-card">
						<h4>LAST ACCOUNT ACTIVITY</h4>
						<h5>3/31/24</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>ACCOUNT START</h4>
						<h5>7</h5>
						<span>4: 32PM EST</span>
					</div>
					<div class="customer-details-card">
						<h4>DEVICE LOGGED IN</h4>
						<h5>3</h5>
						<a href="#">View All </a>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- Table -->
		<div class="customer-details-table mt-4 table-responsive">
			<span>Last 5 Invoice</span>
			<table class="table table-striped mt-3 table-responsive">
				<thead>
					<tr>
					<th>INVOICE ID</th>
					<th>PERIOD</th>
					<th class="text-center" >STATUS</th>
					<th class="text-center">USERS</th>
					<th>AMOUNT</th>
					<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>CA-1001-20198</td>
						<td class="fw-bold">28 Feb 2024 - 28 May 2024</td>
						<td class="text-center">
							<div class="status-tag ms-3">
							<i class="bi bi-dot"></i> Paid
							</div>
						</td>
						<td class="text-center">5</td>
						<td>$0.00</td>
						<td class="action">
							<i class="bi bi-eye me-3"></i>
							<i class="bi bi-download me-3"></i>
							<button class="action-refund-btn">Refund</button>
						</td>
					</tr>
					<tr>
						<td>CA-1001-20198</td>
						<td class="fw-bold">28 Feb 2024 - 28 May 2024</td>
						<td class="text-center">
							<div class="status-tag ms-3">
							<i class="bi bi-dot"></i> Paid
							</div>
						</td>
						<td class="text-center">5</td>
						<td>$0.00</td>
						<td class="action">
							<i class="bi bi-eye me-3"></i>
							<i class="bi bi-download me-3"></i>
							<button class="action-refund-btn">Refund</button>
						</td>
					</tr>
					<tr>
						<td>CA-1001-20198</td>
						<td class="fw-bold">28 Feb 2024 - 28 May 2024</td>
						<td class="text-center">
							<div class="status-tag ms-3">
							<i class="bi bi-dot"></i> Paid
							</div>
						</td>
						<td class="text-center">5</td>
						<td>$0.00</td>
						<td class="action">
							<i class="bi bi-eye me-3"></i>
							<i class="bi bi-download me-3"></i>
							<button class="action-refund-btn">Refund</button>
						</td>
					</tr>
					<tr>
						<td>CA-1001-20198</td>
						<td class="fw-bold">28 Feb 2024 - 28 May 2024</td>
						<td class="text-center">
							<div class="status-pending-tag ms-3">
								<i class="bi bi-dot"></i> Pending
							</div>
						</td>
						<td class="text-center">5</td>
						<td>$0.00</td>
						<td class="action">
							<i class="bi bi-eye me-3"></i>
							<i class="bi bi-download me-3"></i>
							<button class="text-danger-refund">Refund</button>
						</td>
					</tr>
					<tr>
						<td>CA-1001-20198</td>
						<td class="fw-bold">28 Feb 2024 - 28 May 2024</td>
						<td class="text-center">
							<div class="status-tag ms-3">
							<i class="bi bi-dot"></i> Paid
							</div>
						</td>
						<td class="text-center">5</td>
						<td>$0.00</td>
						<td class="action">
							<i class="bi bi-eye me-3"></i>
							<i class="bi bi-download me-3"></i>
							<button class="action-refund-btn">Refund</button>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="text-center all-invoice-text">
				<span >View All Invoices</span>
			</div>
		</div>
	</section>
</main>

@endsection