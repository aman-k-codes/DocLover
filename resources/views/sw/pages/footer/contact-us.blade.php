@extends('sw.layout.master')

@section('title', 'Contact Us - CraftMyDoc')

@section('meta_description', 'Get in touch with CraftMyDoc. Contact us for support, feedback, or partnership opportunities. We’re here to help with resumes, documents, images, and more.')

@section('meta_keywords', 'CraftMyDoc Contact, Support, Feedback, Get in Touch, Resume Help, Document Tools')

@section('content')
<section class="bg-white py-24 px-6">
    <div class="max-w-3xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            <i class="fas fa-envelope text-blue-600 mr-2"></i> Contact <span class="text-blue-600">Us</span>
        </h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Have questions, feedback, or need support? Fill out the form below and we’ll get back to you as soon as possible. We're always happy to help!
        </p>
    </div>

    <div class="max-w-3xl mx-auto mt-12 bg-gray-50 p-8 rounded-2xl shadow">
        <form method="POST" action="{{ url('/contact-submit') }}">
            @csrf

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-1">Your Name</label>
                    <input type="text" name="name" id="name" required class="w-full border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email Address</label>
                    <input type="email" name="email" id="email" required class="w-full border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="subject" class="block text-gray-700 font-medium mb-1">Subject</label>
                    <input type="text" name="subject" id="subject" required class="w-full border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="message" class="block text-gray-700 font-medium mb-1">Message</label>
                    <textarea name="message" id="message" rows="5" required class="w-full border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition duration-300 font-medium text-lg shadow">
                        <i class="fas fa-paper-plane mr-2"></i> Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="text-center mt-16">
        <a href="{{ url('/') }}"
           class="text-blue-600 hover:underline text-base font-medium">
            ← Back to Home
        </a>
    </div>
</section>
@endsection
