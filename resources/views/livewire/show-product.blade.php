<div>
    <section>
        <div class="container py-5">
            <div class="text-end">
                <a class="btn btn-primary" href="/">back</a>
            </div>
            <h3> Show Product </h5>
            <p><b>Name :</b> {{$product->name}} </p>
            <p><b>Price :</b> {{$product->price_in_cents / 100}} </p>
            <p><b>Details :</b> {{$product->details}} </p>
            <p><b>Publish :</b> {{$product->publish}} </p>
        </div>
    </section>
</div>
