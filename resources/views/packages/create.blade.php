@extends('layouts.admin')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create Package</h1>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
@endsection

@section('content')
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-basic-info-tab" data-toggle="pill"
                        href="#custom-tabs-one-basic-info" role="tab" aria-controls="custom-tabs-one-basic-info"
                        aria-selected="true">Basic Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-itinerary-tab" data-toggle="pill"
                        href="#custom-tabs-one-itinerary" role="tab" aria-controls="custom-tabs-one-itinerary"
                        aria-selected="false">Itinerary</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.packages.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-one-basic-info" role="tabpanel"
                        aria-labelledby="custom-tabs-one-basic-info-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <x-forms.input label="Package Name" name="name" type="text" value="" />
                            </div>
                            <div class="col-md-4">
                                <x-forms.input label="Slug" name="slug" type="text" value="{{ old('slug') }}" />
                            </div>
                            <div class="col-md-4">
                                <x-forms.input label="Duration" name="duration" type="text" value="" />
                            </div>
                            <div class="col-md-4">
                                <x-forms.input label="Price" name="price" type="number" value="" />
                            </div>
                            <div>
                                <x-forms.textarea label="Description" name="description" value="" />
                            </div>
                            <!-- Image upload -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                        id="image" name="image" accept="image/*">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Image preview -->
                                <img id="image-preview" src="#" alt="Image Preview"
                                    style="max-width: 100%; display: none;">
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-itinerary" role="tabpanel"
                        aria-labelledby="custom-tabs-one-itinerary-tab">
                        <div id="itinerary-container">

                        </div>
                        <button type="button" id="add-day-btn" class="btn btn-primary">Add Day</button>
                    </div>
                </div>
                <div class="tab-custom-content">
                    <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var img = document.getElementById('image-preview');
                img.src = reader.result;
                img.style.display = 'block'; // Show the image preview
            };
            reader.readAsDataURL(input.files[0]);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addDayBtn = document.getElementById("add-day-btn");
            const itineraryContainer = document.getElementById("itinerary-container");

            addDayBtn.addEventListener("click", function() {
                const day = createItineraryDay();
                itineraryContainer.appendChild(day);

                // Attach event listener to delete button
                const deleteBtn = day.querySelector(".btn-delete-day");
                deleteBtn.addEventListener("click", function() {
                    itineraryContainer.removeChild(day);
                });
            });

            // Add event listeners for drag and drop
            itineraryContainer.addEventListener("dragstart", function(event) {
                if (event.target.classList.contains("itinerary-handle")) {
                    const draggableElement = event.target.closest(".itinerary-day");
                    draggableElement.classList.add("dragging");
                    event.dataTransfer.setData("text/plain", draggableElement.id);
                }
            });

            itineraryContainer.addEventListener("dragover", function(event) {
                event.preventDefault();
            });

            itineraryContainer.addEventListener("drop", function(event) {
                event.preventDefault();
                const draggableId = event.dataTransfer.getData("text/plain");
                const draggableElement = document.getElementById(draggableId);
                const dropzone = event.target.closest("#itinerary-container");

                if (dropzone && draggableElement) {
                    const afterElement = getDragAfterElement(dropzone, event.clientY);
                    if (afterElement == null) {
                        dropzone.appendChild(draggableElement);
                    } else {
                        dropzone.insertBefore(draggableElement, afterElement);
                    }
                }
            });

            function getDragAfterElement(container, y) {
                const draggableElements = [...container.querySelectorAll(".itinerary-day:not(.dragging)")];

                return draggableElements.reduce((closest, child) => {
                    const box = child.getBoundingClientRect();
                    const offset = y - box.top - box.height / 2;
                    if (offset < 0 && offset > closest.offset) {
                        return {
                            offset: offset,
                            element: child
                        };
                    } else {
                        return closest;
                    }
                }, {
                    offset: Number.NEGATIVE_INFINITY
                }).element;
            }

            function createItineraryDay() {
                const day = document.createElement("div");
                day.classList.add("itinerary-day");
                day.id = "day-" + Math.random().toString(36).substring(7); // Unique ID for each day
                day.innerHTML = `
                    <div class="row">
                        <div class="col-md-1 itinerary-handle" draggable="true">&#9776;</div>
                        <div class="col-md-3">
                            <x-forms.input label="Title" name="itinerary_title[]" type="text" value="" />
                        </div>
                        <div class="col-md-6">
                            <x-forms.textarea label="Description" name="itinerary_description[]" value="" />
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-delete-day">Delete</button>
                        </div>
                    </div>
                `;
                return day;
            }

            itineraryContainer.addEventListener("dragenter", function(event) {
                if (event.target.classList.contains("itinerary-day")) {
                    event.target.classList.add("drag-over");
                }
            });

            itineraryContainer.addEventListener("dragleave", function(event) {
                if (event.target.classList.contains("itinerary-day")) {
                    event.target.classList.remove("drag-over");
                }
            });

            itineraryContainer.addEventListener("dragend", function(event) {
                const draggingElement = document.querySelector(".itinerary-day.dragging");
                if (draggingElement) {
                    draggingElement.classList.remove("dragging");
                }

                const dropzones = document.querySelectorAll(".itinerary-day");
                dropzones.forEach(dropzone => {
                    dropzone.classList.remove("drag-over");
                });
            });
        });
    </script>
@endpush
