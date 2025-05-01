@extends('sw.layout.master')

@section('title', 'Privacy Policy - CraftMyDoc')

@section('meta_description', 'Review CraftMyDoc’s privacy policy to understand how we collect, use, and protect your personal information.')

@section('meta_keywords', 'Privacy Policy, CraftMyDoc, Data Protection, User Privacy, Personal Information')

@section('content')
<section class="bg-white py-24 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            <i class="fas fa-user-shield text-blue-600 mr-2"></i> Privacy <span class="text-blue-600">Policy</span>
        </h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Your privacy matters to us. This policy explains how CraftMyDoc collects, uses, and safeguards your data when you use our services.
        </p>
    </div>

    <div class="max-w-4xl mx-auto mt-12 space-y-8 text-gray-700 leading-relaxed text-base">
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">1. Information We Collect</h2>
            <p>We may collect personal details (such as your name, email address, and usage data) when you use our tools, contact us, or submit a form.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">2. How We Use Your Information</h2>
            <p>We use the information to improve our services, respond to inquiries, process forms, and ensure a smooth, secure experience for you.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">3. Cookies & Analytics</h2>
            <p>We may use cookies and analytics tools to understand user behavior and improve performance. You can control cookies through your browser settings.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">4. Data Protection</h2>
            <p>We implement security measures to protect your data from unauthorized access, misuse, or disclosure. However, no method of transmission is 100% secure.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">5. Third-Party Services</h2>
            <p>We do not sell or share your personal data. However, we may use trusted third-party services (like email tools or analytics) under strict confidentiality agreements.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">6. Your Rights</h2>
            <p>You have the right to access, correct, or delete your data. Contact us at any time if you wish to make a request.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">7. Changes to This Policy</h2>
            <p>We may update this policy periodically. The revised date will be posted at the top. Continued use of our services means you accept the changes.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-2">8. Contact Us</h2>
            <p>If you have any questions about our privacy practices, reach out via our <a href="{{ url('/contact') }}" class="text-blue-600 hover:underline">Contact Page</a>.</p>
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
