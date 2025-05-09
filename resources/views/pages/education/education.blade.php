@extends('layouts.app')

@section('content')

<span class="text-center">
    <h1 style="font-size: 3em" class="pt-3">halaman article</h1>
    <p style="animation: alternate">Est.2025</p>
</span>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <img src="{{ asset('/images/bg/bg.jpg') }}" width="600px" class="pb-3" alt="background">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero quae repellendus optio nobis numquam, nesciunt repellat vitae eaque deserunt soluta libero error sunt quam mollitia doloribus voluptatibus sit? Nostrum! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste dolorum quae eligendi ex architecto! Ratione, a maxime. Facilis magni repellat et id saepe quibusdam. Sequi, vel voluptates. Iusto, dicta quisquam?</p>
        </div>
    </div>
</div>

<section class="container py-3" width="300px">
    <div class="row justify-content-center">
        <h1 class="text-center">EDUCATION</h1>
        <div class="col-md-8">
            <div class="card bg-primary">
                <div class="card-body">
                    <p class="pt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolores possimus, nostrum eum temporibus repellat eaque saepe suscipit ut! Nemo adipisci voluptatum sunt inventore incidunt nam minus natus! Asperiores, qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores excepturi consectetur omnis saepe placeat quia quae dignissimos odio error necessitatibus distinctio iusto temporibus ex, laudantium, nemo accusamus, aliquam iure qui.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-secondary">
                <div class="card-body text-white">
                    <h1>Our Information</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam mollitia velit aperiam fugiat, fuga placeat est incidunt dolore repellat atque officiis ducimus, quos accusantium nesciunt eveniet odio rerum aliquam obcaecati? Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nemo dignissimos obcaecati, delectus a sint quis ipsum, sunt nulla perspiciatis rerum iure maiores libero modi beatae laborum repellat, iusto labore.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 style="margin-top: auto">HALAMAN KE 2</h2>
    <p class="pt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae excepturi consequuntur quasi repudiandae molestiae dolor suscipit dolore ratione, reprehenderit quisquam enim praesentium cum voluptate possimus sint ad recusandae cupiditate alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, possimus blanditiis in ullam totam officia, quidem dignissimos autem minima illum cumque, dolores expedita. Voluptate perferendis eveniet sunt, cum quod omnis.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, ex. A recusandae incidunt, ipsa vitae aut quas, natus atque dolorum voluptatem non consectetur praesentium dolore! Eaque nam repudiandae repellat Lorem   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloremque excepturi quidem veniam sit consequatur laborum labore dolore aut esse, porro, totam, architecto incidunt a harum sint possimus voluptatibus? Sequi.</p>
    <h3 class="" style="border: 3px solid rgb(255, 255, 255)"></h3>

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true" style="font-size: medium">
          List item
        </a>
        <a href="#" class="list-group-item list-group-item-action">Misalnya tentang Website</a>
        <a href="#" class="list-group-item list-group-item-action">Misalnya tentang bisnis</a>
        <a href="#" class="list-group-item list-group-item-action">Misalnya tentang marketing</a>
        <a href="#" class="list-group-item list-group-item-action disabled" aria-disabled="true">Kayaknya ini penutup</a>
      </div>
      <h3 class="" style="border: 3px solid gray"></h3>
      <div class="row justify-content-center">
      <img src="{{ ('/images/bg/teamwork.jpg')}}" width="600px" alt="Teamwork Images" class="pb-3">
    </div>
      <p style="margin-top: 5px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, laborum quibusdam beatae nulla ut sapiente dolore aperiam consequatur vitae non iste, facere pariatur nesciunt qui magni eligendi distinctio molestias quaerat?</p>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comments</label>
      </div>
</div>
@endsection