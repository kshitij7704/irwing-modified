@extends('frontend.partials.app')

@section('content')

<style>
    /* Card */
    .card {
        border: 1px solid #e1e1e1;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .card-body {
        padding: 0 !important;
    }
    .card-header {
        background: #0d6efd;
        color: #fff;
        font-weight: 600;
        border-radius: 10px 10px 0 0;
        padding: 15px 20px;
    }

    /* Table styling */
    .table thead th {
        background: #f8f9fa;
        font-weight: 600;
        color: #333;
        padding: 12px 15px;
        text-align: left !important;
    }
    .table tbody td {
        padding: 12px 15px;
        vertical-align: middle;
        text-align: left !important;
    }
    .table tbody tr:hover {
        background-color: #f1f5f9;
        transition: 0.2s;
    }

    .table a {
        color: #0d6efd;
        font-weight: 500;
        text-decoration: none;
    }
    .table a:hover {
        text-decoration: underline;
    }

    /* Search box */
    .search-container {
        text-align: right;
        padding: 10px 15px;
    }
    .search-input {
        border: 1px solid #ced4da;
        border-radius: 6px;
        padding: 6px 10px;
        width: 250px;
    }

    /* Pagination */
    .pagination-container {
        display: flex;
        justify-content: flex-end;
        padding: 10px 15px;
        gap: 5px;
    }
    .pagination-container button {
        border: 1px solid #dee2e6;
        background: #f8f9fa;
        padding: 5px 10px;
        border-radius: 6px;
        cursor: pointer;
    }
    .pagination-container button.active {
        background: #0d6efd;
        color: #fff;
        border-color: #0d6efd;
    }
</style>

<div class="mb-3 mb-lg-5"></div>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h4 class="card-header d-flex justify-content-between align-items-center">
            IR Wing Office Memoranda (OMs)
        </h4>

        <!-- Search box -->
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="Search by Name...">
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="ormsTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Order / Circular Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach($orms as $index => $orm)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <a href="{{ asset($orm->file) }}" target="_blank">
                                    {{ $orm->title }}
                                </a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($orm->date)->format('F d, Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-container" id="pagination"></div>
        </div>
    </div>
</div>

@endsection

<script>
document.addEventListener("DOMContentLoaded", function() {
    const rowsPerPage = 10;
    const tableBody = document.getElementById("tableBody");
    const allRows = Array.from(tableBody.querySelectorAll("tr"));
    const paginationContainer = document.getElementById("pagination");
    const searchInput = document.getElementById("searchInput");

    let currentPage = 1;
    let filteredRows = [...allRows];

    function displayRows(page) {
        tableBody.innerHTML = "";
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const rowsToShow = filteredRows.slice(start, end);
        rowsToShow.forEach(row => tableBody.appendChild(row));
        renderPagination();
    }

    function renderPagination() {
        paginationContainer.innerHTML = "";
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        if (totalPages <= 1) return;

        // Previous button
        const prevBtn = document.createElement("button");
        prevBtn.textContent = "Prev";
        prevBtn.disabled = currentPage === 1;
        prevBtn.addEventListener("click", () => {
            if (currentPage > 1) {
                currentPage--;
                displayRows(currentPage);
            }
        });
        paginationContainer.appendChild(prevBtn);

        // Page numbers
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.textContent = i;
            btn.classList.toggle("active", i === currentPage);
            btn.addEventListener("click", () => {
                currentPage = i;
                displayRows(currentPage);
            });
            paginationContainer.appendChild(btn);
        }

        // Next button
        const nextBtn = document.createElement("button");
        nextBtn.textContent = "Next";
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.addEventListener("click", () => {
            if (currentPage < totalPages) {
                currentPage++;
                displayRows(currentPage);
            }
        });
        paginationContainer.appendChild(nextBtn);
    }

    searchInput.addEventListener("keyup", function() {
        const term = this.value.toLowerCase();
        filteredRows = allRows.filter(row => {
            const nameCell = row.querySelector("td:nth-child(2)");
            return nameCell && nameCell.textContent.toLowerCase().includes(term);
        });
        currentPage = 1;
        displayRows(currentPage);
    });

    // Initial display
    displayRows(currentPage);
});
</script>
