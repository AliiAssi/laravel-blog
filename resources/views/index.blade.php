@extends('layouts.app')
@section('content')
<div class="hero-container">
    <h1 class="hero-title">Welcome to my blog</h1>
    <a href="/" class="start-reading-btn">Start reading</a>
</div>
<!-- read more -->
<div class="container-fluid">
    <div class="row gap-4 py-5 ">
        <div class="col">
            <div class="text-center">
                <img src="https://images.unsplash.com/photo-1518563077661-23ad56581d77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2072&q=80" height="20%" width="70%" class="rounded" alt="...">
            </div>
        </div>
        <div class="col">
            <h2 class="h2 text-center mb-4 font-weight-bold text-uppercase">How to Be an Expert in 2023</h2>
            <p class="">
                You can find a list of all programming languages here.
            </p>
            <p class="gris-color">
                Programming refers to the process of creating sets of instructions or code that a computer can interpret and execute. These instructions are written in programming languages and are used to perform specific tasks, solve problems, or automate processes. Programming involves designing algorithms, data structures, and logical flows to achieve a desired outcome
            </p>
            <a href="/" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>
<!-- category div -->
<div class="container1">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center">
                <h2 class="h2">Explore Blog Categories</h2>
            </div>
            <div class="category-container d-flex justify-content-center flex-wrap mt-4">
                <a href="#" class="btn btn-outline-primary btn-sm m-1">All Categories</a>
                <a href="#" class="btn btn-outline-primary btn-sm m-1">UX Design</a>
                <a href="#" class="btn btn-outline-primary btn-sm m-1">Programming</a>
                <a href="#" class="btn btn-outline-primary btn-sm m-1">Graphic Design</a>
                <a href="#" class="btn btn-outline-primary btn-sm m-1">Front-end Development</a>
                <a href="#" class="btn btn-outline-primary btn-sm m-1">Productivity</a>
                <a href="#" class="btn btn-outline-primary btn-sm m-1">Tips & Tricks</a>
            </div>
        </div>
    </div>
</div>
<!-- recent posts -->
<div class="container mx-auto text-center py-5">
    <h2 class="font-weight-bold display-4 py-3">Recent Posts</h2>
    <p class="text-muted lead px-5">
        PHP is a general-purpose language.
    </p>
</div>
<div class="container2">
    <div class="row">
        <div class="col-md-6">
            <div class="my-color text-white pt-4">
                <div class="mx-auto pb-5 w-4/5">
                    <ul class="list-unstyled d-md-flex gap-2">
                        <li class="my-li text-warning p-2 rounded inline-block my-1 hover:text-white transition duration-300"><a href="#">PHP</a></li>
                        <li class="my-li text-warning p-2 rounded inline-block my-1 hover:text-white transition duration-300"><a href="#">Programming</a></li>
                        <li class="my-li text-warning p-2 rounded inline-block my-1 hover:text-white transition duration-300"><a href="#">Web Development</a></li>
                    </ul>
                    <p class="paragraph">PHP is a scripting language that is commonly used for web development.</p>
                    <p class="paragraph">
                        Feel free to adjust the values and properties to match your design preferences. This example demonstrates a more complex styling approach for the "read more" link, but you can further customize it based on your project's design requirements.
                    </p> <p class="paragraph">
                        Feel free to adjust the values and properties to match your design preferences. This example demonstrates a more complex styling approach for the "read more" link, but you can further customize it based on your project's design requirements.
                    </p> <p class="paragraph">
                        Feel free to adjust the values and properties to match your design preferences. This example demonstrates a more complex styling approach for the "read more" link, but you can further customize it based on your project's design requirements.
                    </p>
                    <a href="#" class="read-more">read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="flex">
                <img src="https://images.unsplash.com/photo-1518563077661-23ad56581d77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2072&q=80" class="object-cover" alt="" height="100%" width="100%">
            </div>
        </div>
    </div>
</div>


@endsection
