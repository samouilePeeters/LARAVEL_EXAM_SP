
<div class="section section-white">
	        <div class="container">
	        	<div class="row">

				<div class="section-title">
				<h1>Our Recent Works</h1>
				</div>


			<ul class="grid cs-style-3">
                @foreach ($works as $work)
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="{{ Voyager::image($work->image) }}" alt="img04">
						<figcaption>
							<h3>{{$work->title}}</h3>
							<span>{{$work->client->name }}</span>
							<a href="{{route('work.show',$work->id)}}">Take a look</a>
						</figcaption>
					</figure>
	        	</div>
                @endforeach
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->
