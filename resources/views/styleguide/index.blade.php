@extends('layouts.empty')
@section('title', 'Style Guide')

@section('content')

<div class="">

    <div class="column">
        <!-- Colors -->
        <section class="" id="sg-colors">

        <h2>Colors</h2>


    </section>

    <!-- Type -->
    <section class="" id="sg-type">

    <h2>Type Style</h2>

</section>

<!-- Button -->
<section class="" id="sg-button">

<h2>Buttons</h2>

<p><a href="#" class="button">Primary Button</a></p>
<pre>
    <code>
        {{ '<p><a href="#" class="button">Primary Button</a></p>' }}
    </code>
</pre>

<p><a href="#" class="button--secondary">Secondary Button</a></p>
<pre>
    <code>
        {{ '<p><a href="#" class="button--secondary">Secondary Button</a></p>' }}
    </code>
</pre>

</section>
        <!-- Layouts -->
        <section class="layout-split-example" id="sg-layout">

        <h2>Layouts</h2>

        <h3>Full Width</h3>
        <pre>
            <code>
                {{ '
                <div class="layout-split-full">
                    <div class="column">
                        // content
                    </div>
                </div>' }}
            </code>
        </pre>
        <div class="layout-split-full">
            <div class="column">

            </div>
        </div>

        </section>

    </div>
</div>

@endsection
