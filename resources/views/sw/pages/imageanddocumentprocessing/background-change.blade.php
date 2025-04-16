@extends('sw.layout.master')

@section('title', 'DocLover - Remove Image Background')

@section('meta_description', 'Remove the background from any image instantly with DocLover. Free, fast, and easy to
    use.')
@section('meta_keywords', 'Image background remover, remove background, transparent background, JPG PNG background
    remover')

@section('content')
    <section class="pt-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-extrabold text-gray-800">Remove Background from Image</h1>
            <p class="text-lg text-gray-600 mt-3">Upload your image and get a transparent version instantly. Free & fast
                background remover tool.</p>
        </div>
    </section>

    <section class="py-10 px-4">
        {{-- Steps Bar --}}
        <div
            class="flex flex-col sm:flex-row sm:justify-center sm:space-x-8 space-y-4 sm:space-y-0 bg-indigo-50 rounded-2xl p-6 max-w-2xl mx-auto mb-8 shadow-md">
            @foreach (['Upload Image', 'Remove Background', 'Download Image'] as $i => $step)
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 flex items-center justify-center bg-indigo-700 text-white rounded-full font-bold"
                        aria-label="Step {{ $i + 1 }}">
                        {{ $i + 1 }}
                    </div>
                    <span class="text-gray-800 font-medium">{{ $step }}</span>
                </div>
            @endforeach
        </div>

        {{-- Upload Section --}}
        <div id="uploadSection"
            class="border-2 border-dashed border-gray-300 rounded-2xl p-6 md:p-10 max-w-4xl mx-auto bg-white shadow-md min-h-screen flex flex-col justify-center">
            <div class="relative w-full h-[140vh] sm:h-[70vh] md:h-[80vh]">
                <iframe src="https://nileshnavrang-amansahu-bg-remove.hf.space" frameborder="0"
                    class="absolute top-0 left-0 w-full h-full rounded-xl shadow-lg" allowfullscreen>
                </iframe>
            </div>
        </div>

    </section>

    {{-- CTA Footer --}}
    <section class="py-8 bg-gray-50 text-center">
        <p class="text-gray-600 text-sm">
            Need more tools?
            <a href="/tools" class="text-indigo-600 hover:underline">Explore all tools on DocLover</a>.
        </p>
    </section>
@endsection
