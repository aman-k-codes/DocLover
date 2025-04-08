@extends('sw.layout.master')

@section('title', 'Terms & Conditions - DocLover')

@section('meta_description', 'Review the terms and conditions for using DocLover. Understand your rights, responsibilities, and limitations when using our services.')

@section('meta_keywords', 'Terms and Conditions, DocLover, User Agreement, Service Terms, Legal Policy')

@section('content')
<section class="bg-white py-24 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            <i class="fas fa-file-contract text-blue-600 mr-2"></i> Terms & <span class="text-blue-600">Conditions</span>
        </h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            These Terms and Conditions govern your access to and use of DocLover’s services, applications, and website. By using DocLover, you agree to abide by these terms. Please read them carefully.
        </p>
    </div>

    <div class="max-w-4xl mx-auto mt-12 space-y-8 text-gray-700 leading-relaxed text-base">
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">1. Acceptance of Terms</h2>
            <p>By accessing or using DocLover, you confirm your acceptance of these Terms. If you do not agree with any part of the terms, you must not use the services.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">2. Use of Services</h2>
            <p>DocLover provides file conversion, document enhancement, and digital processing tools. You agree to use our services only for lawful and appropriate purposes.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">3. User Responsibilities</h2>
            <p>You are solely responsible for any data, files, or content you upload, convert, or create using DocLover. You agree not to upload malicious, infringing, or harmful content of any kind.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">4. Intellectual Property</h2>
            <p>All content, design, and software used on DocLover are the intellectual property of DocLover or its licensors. Unauthorized reproduction, distribution, or modification is prohibited without prior written consent.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">5. Service Availability</h2>
            <p>We aim to ensure uninterrupted service, but we do not guarantee 100% uptime. Service may be unavailable for maintenance, updates, or unforeseen technical issues.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">6. Limitation of Liability</h2>
            <p>DocLover is not liable for any direct, indirect, incidental, or consequential damages resulting from your use of the platform. All use is at your sole risk.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">7. Account Security</h2>
            <p>If you create an account, you are responsible for maintaining the confidentiality of your credentials and for all activities under your account.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">8. Modifications to Terms</h2>
            <p>We may revise these Terms at any time. Updated versions will be posted here with a revision date. Continued use of our services constitutes your acceptance of any changes.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">9. Termination</h2>
            <p>We reserve the right to suspend or terminate your access to DocLover at our sole discretion, without notice, if we believe you have violated these Terms or engaged in unlawful behavior.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">10. Governing Law</h2>
            <p>These Terms shall be governed by and interpreted under the laws of the jurisdiction in which DocLover operates, without conflict of law principles.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">11. Contact Information</h2>
            <p>For any questions or concerns regarding these Terms & Conditions, please reach out via our <a href="{{ url('/contact') }}" class="text-blue-600 hover:underline">Contact Page</a>.</p>
        </div>
    </div>

    <div class="text-center mt-16">
        <a href="{{ url('/') }}"
           class="text-blue-600 hover:underline text-base font-medium">
            ← Back to Home
        </a>
    </div>
</section>
@endsection
