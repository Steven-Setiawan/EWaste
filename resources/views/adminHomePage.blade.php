<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="side-navbar active-nav d-flex justify-content-between flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="#" class="nav-link h3 text-white my-2">
                Welcome </br>{{ auth()->user()->name }}
            </a>
            <li id="home-link" class="nav-link" style="margin-top: 20px">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Home</span>
            </li>
            <li id="orders-link" class="nav-link">
                <i class="bx bx-box"></i>
                <span class="mx-2">Orders</span>
            </li>
            <li id="customer-link" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Users</span>
            </li>
            <li id="collection-link" class="nav-link">
                <i class="bx bx-buildings"></i>
                <span class="mx-2">Collection Center</span>
            </li>

            <li class="nav-link mt-auto">
                <a href="{{ url('/') }}" class="text-white d-flex align-items-center" style="text-decoration: none;">
                    <i class="bx bx-log-out "></i>
                    <span class="mx-2">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="p-1 my-container active-cont">
        <nav class="navbar top-navbar navbar-light bg-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        </nav>

        <div id="main-content" class="container mt-4">
            <div id="main-content" class="container mt-4">
                <x-card :userCount="$userCount" :collectionCenterCount="$collectionCenterCount" :ewasteCount="$ewasteCount" :itemTypeCount="$itemTypeCount" :cityCount="$cityCount" />
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });

        document.addEventListener("DOMContentLoaded", function() {
            var homeLink = document.getElementById('home-link');
            var ordersLink = document.getElementById('orders-link');
            var customerLink = document.getElementById('customer-link');
            var collectionLink = document.getElementById('collection-link');

            var contentArea = document.getElementById('main-content');

            var initialHomeContent = contentArea.innerHTML;

            function updateContent(content) {
                contentArea.innerHTML = content;
            }

            homeLink.addEventListener('click', function() {
                updateContent(initialHomeContent);
            });

            ordersLink.addEventListener('click', function() {
                updateContent(
                    `
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="text-dark p-3">Orders</h3>
                <a href="{{ route('manage.Order') }}" class="btn btn-dark">Manage Order</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Photo</th>
                        <th scope="col">User</th>
                        <th scope="col">Collection Center</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Ewastes as $ewaste)
                        <tr>
                            <td>{{ $ewaste->id }}</td>
                            <td>
                            <img src="{{ asset($ewaste->image_url) }}" alt="Ewaste Photo" width="50" height="50" class="rounded-circle">
                            </td>
                            <td>{{ $ewaste->user->name }}</td>
                            <td>{{ $ewaste->collectionCenter->name }}</td>
                            <td>{{ $ewaste->item_name }}</td>
                            <td>{{ $ewaste->itemType->TypeName }}</td>
                            <td>{{ $ewaste->description }}</td>
                            <td>
                                <span class="badge bg-{{ $ewaste->status === 'pending' ? 'warning' : ($ewaste->status === 'in_progress' ? 'info' : 'success') }}">
                                    {{ ucfirst($ewaste->status) }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            `
                );
            });

            customerLink.addEventListener('click', function() {
                updateContent(
                    `
        <h3 class='text-dark p-3'>Users</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <img src="{{ asset($user->photo) }}" alt="User Photo" width="50" height="50" class="rounded-circle">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->DOB }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->city->CityName }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        `
                );
            });

            collectionLink.addEventListener('click', function() {
    updateContent(
        `
        <div class="d-flex justify-content-between align-items-center">
                <h3 class="text-dark p-3">Collection Center</h3>
                <a href="{{ route('manage.Collection') }}" class="btn btn-dark">Manage Collection Center</a>
            </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Operating Hours</th>
                    <th scope="col">City</th>
                </tr>
            </thead>
            <tbody>
                @foreach($CollectionCenters as $center)
                    <tr>
                        <td>{{ $center->id }}</td>
                        <td>
                            <img src="{{ asset($center->photo) }}" alt="Collection Center Photo" width="50" height="50" class="rounded-circle">
                        </td>
                        <td>{{ $center->name }}</td>
                        <td>{{ $center->address }}</td>
                        <td>{{ $center->contact_number }}</td>
                        <td>{{ $center->operating_hours }}</td>
                        <td>{{ $center->city->CityName }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        `
    );
});
        });
    </script>
</body>

</html>
