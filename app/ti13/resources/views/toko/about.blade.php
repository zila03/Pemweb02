@extends('template/main')

@section('content1')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="d-flex justify-content-center mb-4">
				About Us
			</h1>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
		</div>
	</div>
</div>
@endsection

@section('content2')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3 m-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/profile1.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Jonathan Lim</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/profile2.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Agatha Smith</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 m-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/profile4.png" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Stephant Crhist </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection