@extends('layouts.dashboard')

@section('css')
@endsection
@section('content')


    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Requests</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">


							    </div><!--//col-->
							    <div class="col-auto">


							    </div>
							    <div class="col-auto">

							    </div>
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->





				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Request</th>
												<th class="cell">Client name</th>
												<th class="cell">Email</th>
												<th class="cell">Title</th>
												<th class="cell">Message</th>
												<th class="cell">Created At</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($requests as $request)

											<tr>
												<td class="cell">{{ $request->id }}</td>
												<td class="cell"><span class="truncate">{{ $request->name }}</span></td>
												<td class="cell">{{ $request->email }}</td>
												<td class="cell"><span class="note">lorem ipsum</span></td>
												<td class="cell"><span class="badge bg-success">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, obcaecati eligendi. Omnis molestiae, excepturi nesciunt culpa iste modi dignissimos reprehenderit fugit consequatur ullam esse non officia ipsam delectus pariatur dolore?</span></td>
												<td class="cell">12.11.1998</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
						        </div><!--//table-responsive-->

						    </div><!--//app-card-body-->
						</div><!--//app-card-->
						<nav class="app-pagination">
							{{-- <ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								    <a class="page-link" href="#">Next</a>
								</li>
							</ul> --}}
						</nav><!--//app-pagination-->

			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">

						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->


    </div><!--//app-wrapper-->

    @endsection
    @section('js')
        <!-- Contact Javascript File -->
        <script src="../mail/jqBootstrapValidation.min.js"></script>
        <script src="../mail/contact.js"></script>
    @endsection
