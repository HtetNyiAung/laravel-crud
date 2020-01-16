<div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    <ul class="nav flex-column" role="tablist">
                        {{-- Products --}}
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href='{{route('products.index')}}'>
                                   Products
                                </a>
                            </li>
                            {{-- User Lists --}}
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href='{{route('users.index')}}'>
                                       User Lists
                                </a>
                            </li>

                    </ul>
                </div>
            </div>
            <br/>
</div>
