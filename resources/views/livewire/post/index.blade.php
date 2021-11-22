<div>
    <section>
        <div class="card shadow mt-1 py-3 bg-body rounded">
            <div class="container">
                @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('post.create') }}" class="btn btn-primary">Add  {{ $message }}</a>
                    </div>
                    <div class="col">
                        <form class="d-flex">
                            <input wire:model="search" class="form-control me-2" type="search" placeholder="Search posts by title..." aria-label="Search">
                        </form>
                    </div>
                </div>
                <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td class="w-50">{{ $post->description }}</td>
                            <td>{{ $post->price }}</td>
                            <td :wire:key="{{ $post->id }}">{{ $post->id }}</td>
                        </tr>
                        @empty
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </section>
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form wire:submit.prevent="savePost">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Book</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTitle" wire:model="title">
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputAuthor" wire:model="author">
                            @error('author') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDesc" wire:model="description">
                            @error('description') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPrice" wire:model="price">
                            @error('price') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
</div>
