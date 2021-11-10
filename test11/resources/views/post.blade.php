<x-layout>
    <article>
        <section>
            <h1><?= $post->title; ?></h1>
            <p>
                <a href="{{ route('category') }}/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>{{!! $post->body !!}}</div>
        </section>
    </article>
    <a href="{{ route('posts') }}">Go back</a>
</x-layout>
