@extends('admin.layouts.app')
@section('title', 'Company list')

@section('css')
    <!-- Trumbowyg CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/Alex-D/Trumbowyg/v2.25.1/dist/ui/trumbowyg.min.css">

    <!-- Styles -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h4 class="card-header bg-success text-center py-1 text-light">Trumbowyg</h4>
                    <div class="card-body px-1 py-0">
                        <textarea id="trumbowyg" placeholder="Write your text here..."></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h4 class="card-header bg-success text-center py-1 text-light">quill-editor</h4>
                    <div class="card-body px-1 py-0">
                        <div id="quill-editor" style="height: 200px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <h4 class="card-header bg-success text-center py-1 text-light">Summernote</h4>
                    <div class="card-body px-1 py-0">
                        <textarea id="summernote" placeholder="Write your text here..."></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Trumbowyg JS -->
    <script src="https://cdn.rawgit.com/Alex-D/Trumbowyg/v2.25.1/dist/trumbowyg.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#trumbowyg').trumbowyg({
                // Optional configuration
                btns: [
                    ['viewHTML'],
                    ['formatting'],
                    ['bold', 'italic', 'underline'],
                    ['link'],
                    ['insertImage'],
                    ['unorderedList', 'orderedList'],
                    ['removeformat']
                ]
            });
        });
    </script>

    <!-- quill-editor -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Write your text here...'
        });
    </script>

    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                placeholder: 'Write your text here...'
            });
        });
    </script>
@endsection
