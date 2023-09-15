<div class="filter_games text-light">
    <form id="filter_form" action="{{ route('clients.games.filter') }}"
        method="POST">
        @csrf
        <div class="filter_header">
            <span class="filter_counter">Filter</span>
            <a class="text-light" href="#">Reset</a>
        </div>
        <div>
            <div class="filter_search">
                <div>
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" name="search">
                </div>
            </div>

            <hr>
            <div class="filter_genre">
                <div class="collapse_filter">
                    <button class="btn btn-secondary text-start" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                        <div><span>Genre</span></div>
                        <div><i class="fa-solid fa-chevron-down"></i></div>
                    </button>
                    <ul class="collapse" id="collapseExample">
                        @foreach ($viewData['type'] as $genre)
                            <li
                                class="collapse_items {{ in_array($genre->getTypeId(), $viewData['oldCheck']) ? 'active' : '' }}">
                                <label
                                    id="{{ 'label' . $genre->getTypeGame() }}"
                                    for="{{ 'filter' . $genre->getTypeGame() }}"
                                    class="text-light label_filter">{{ $genre->getTypeGame() }}</label>
                            </li>
                        @endforeach
                    </ul>
                    @foreach ($viewData['type'] as $genre)
                        <input type="checkbox" name="genreItem[]" hidden
                            id="{{ 'filter' . $genre->getTypeGame() }}"
                            {{ in_array($genre->getTypeId(), $viewData['oldCheck']) ? 'checked' : '' }}
                            value="{{ $genre->getTypeId() }}">
                    @endforeach
                    <button onclick="handleSubmitFormFilter()"
                        class="btn btn-outline-secondary flex-grow-1 justify-content-center text-center mt-3">Apply
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script>
        const labelFilters = document.querySelectorAll('.label_filter');
        const liElements = document.querySelectorAll('.collapse_items');
        const spanCounter = document.querySelector(
            '.filter_counter');
        const activeElement = document.querySelectorAll(
            '.collapse_items.active');
        spanCounter.innerText = `Filter (${activeElement.length})`
        const handleCounter = () => {
            const activeElement = document.querySelectorAll(
                '.collapse_items.active');

            if (spanCounter != null) {
                spanCounter.innerText =
                    `Filter (${activeElement.length})`
            } else {
                spanCounter
                    .innerText = 'Filter (0)'
            }
        }
        for (const liElement of liElements) {
            liElement.addEventListener('click', function() {
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                    handleCounter();
                } else {
                    this.classList.add('active');
                    handleCounter();
                }
            });


        }
    </script>
</div>
