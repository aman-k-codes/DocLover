@extends('Layout.master')

@section('content')
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-3">All PDF Tools</h2>
            <p class="text-lg text-gray-600 mb-10">
                Explore our comprehensive set of PDF tools to enhance your workflow.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @php
                    $tools = [
                        ['icon' => 'fas fa-compress-alt', 'bg' => 'bg-red-100 text-red-600', 'title' => 'Compress PDF', 'desc' => 'Reduce the size of your PDF without losing quality'],
                        ['icon' => 'fas fa-file-pdf', 'bg' => 'bg-blue-100 text-blue-600', 'title' => 'PDF Converter', 'desc' => 'Convert Word, PowerPoint, and Excel to and from PDF'],
                        ['icon' => 'fas fa-file-powerpoint', 'bg' => 'bg-orange-100 text-orange-600', 'title' => 'PPT to PDF', 'desc' => 'Convert PowerPoint presentations to PDF'],
                        ['icon' => 'fas fa-file-image', 'bg' => 'bg-yellow-100 text-yellow-600', 'title' => 'PDF to JPG', 'desc' => 'Extract images or convert pages to JPG'],
                        ['icon' => 'fas fa-file-excel', 'bg' => 'bg-green-100 text-green-600', 'title' => 'Excel to PDF', 'desc' => 'Convert Excel spreadsheets to PDF'],
                        ['icon' => 'fas fa-edit', 'bg' => 'bg-purple-100 text-purple-600', 'title' => 'Edit PDF', 'desc' => 'Add text, shapes, images, and annotations']
                    ];
                @endphp

                @foreach ($tools as $tool)
                    <div class="bg-white p-6 rounded-lg shadow-md border hover:shadow-lg transition-all cursor-pointer">
                        <div class="flex items-center space-x-4">
                            <div class="{{ $tool['bg'] }} p-3 rounded-lg">
                                <i class="{{ $tool['icon'] }} text-xl"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $tool['title'] }}</h3>
                                <p class="text-sm text-gray-600">{{ $tool['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
