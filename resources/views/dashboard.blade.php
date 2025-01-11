<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #1a202c;
            padding: 2rem;
            line-height: 1.5;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2rem;
            border-radius: 20px;
            color: white;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.2);
        }

        .welcome-text {
            flex-grow: 1;
        }

        .welcome-text h3 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .welcome-text p {
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .logout-container {
            margin-left: 2rem;
        }

        .logout-button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            border: 2px solid #667eea;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(102, 126, 234, 0.2);
        }

        .table-section {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .table-section h2 {
            color: #2d3748;
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.8rem;
            border-bottom: 2px solid #e2e8f0;
            position: relative;
        }

        .table-section h2::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .search-box {
            padding: 0.5rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            width: 300px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
        }

        .pagination {
            display: flex;
            gap: 0.5rem;
            align-items: center;
            margin-top: 1rem;
        }
        .logout-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px; /* Reduced padding for the container */
    background-color: #f9f9f9; /* Light background color */
}

.signup-link {
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #333; /* Dark text color */
    margin: 0; /* Remove additional margin */
}

.signup-link a {
    text-decoration: none;
    color: #007BFF; /* Primary blue link color */
    padding: 8px 16px; /* Reduce padding for the link */
    border: 2px solid #007BFF; /* Blue border */
    border-radius: 5px;
    transition: all 0.3s ease; /* Smooth hover effect */
}

.signup-link a:hover {
    background-color: #007BFF; /* Fill with blue on hover */
    color: #fff; /* White text on hover */
}

        .pagination button {
            padding: 0.5rem 1rem;
            border: none;
            background: #f8fafc;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pagination button:hover:not(:disabled) {
            background: #667eea;
            color: white;
        }

        .pagination button.active {
            background: #667eea;
            color: white;
        }

        .pagination button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .pagination-info {
            margin: 0 1rem;
            color: #4a5568;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 1rem;
        }

        th {
            background: #f8fafc;
            color: #4a5568;
            font-weight: 600;
            padding: 1rem;
            text-align: left;
            border-bottom: 2px solid #e2e8f0;
            white-space: nowrap;
        }

        td {
            padding: 1rem;
            color: #4a5568;
            border-bottom: 1px solid #e2e8f0;
        }

        tr:hover td {
            background: #f8fafc;
        }

        .stats-value {
            font-weight: 600;
            color: #5a67d8;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .table-controls {
                flex-direction: column;
                gap: 1rem;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="logout-container">
    <p class="signup-link">
        <a href="{{ route('signup') }}">Logout</a>
    </p>
</div>
<style>
    
    </style>

        <div class="table-section">
            <h2>Products with Category and Supplier</h2>
            <div class="table-controls">
                <input type="text" class="search-box" placeholder="Search products..." data-table="table1">
            </div>
            <div class="table-wrapper">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Supplier Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productsWithCategoryAndSupplier as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->supplier_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination" id="pagination1"></div>
        </div>

        <div class="table-section">
            <h2>Product Prices</h2>
            <div class="table-controls">
                <input type="text" class="search-box" placeholder="Search products..." data-table="table2">
            </div>
            <div class="table-wrapper">
                <table id="table2">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productsWithPrices as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price ? '$'.number_format($product->price, 2) : 'No Price' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination" id="pagination2"></div>
        </div>

        <div class="table-section">
            <h2>Complete Product Details</h2>
            <div class="table-controls">
                <input type="text" class="search-box" placeholder="Search products..." data-table="table3">
            </div>
            <div class="table-wrapper">
                <table id="table3">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Supplier Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productsWithDetailsAndPrices as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->supplier_name }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination" id="pagination3"></div>
        </div>

        <div class="table-section">
            <h2>Supplier Statistics</h2>
            <div class="table-controls">
                <input type="text" class="search-box" placeholder="Search suppliers..." data-table="table4">
            </div>
            <div class="table-wrapper">
                <table id="table4">
                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Total Products</th>
                            <th>Average Product Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplierStats as $stat)
                        <tr>
                            <td>{{ $stat->supplier_name }}</td>
                            <td class="stats-value">{{ $stat->total_products }}</td>
                            <td class="stats-value">{{ $stat->average_value ? '$'.number_format($stat->average_value, 2) : 'No Price' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination" id="pagination4"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize pagination for all tables
            ['table1', 'table2', 'table3', 'table4'].forEach(tableId => {
                initializeTableControls(tableId);
            });

            function initializeTableControls(tableId) {
                const itemsPerPage = 10;
                let currentPage = 1;
                let filteredData = [];

                const table = document.getElementById(tableId);
                const tableRows = Array.from(table.getElementsByTagName('tr')).slice(1);
                filteredData = tableRows;

                // Search functionality
                const searchInput = document.querySelector(`input[data-table="${tableId}"]`);
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    filteredData = tableRows.filter(row => {
                        return Array.from(row.cells).some(cell =>
                            cell.textContent.toLowerCase().includes(searchTerm)
                        );
                    });
                    currentPage = 1;
                    updateTable();
                    updatePagination();
                });

                function updateTable() {
                    const startIndex = (currentPage - 1) * itemsPerPage;
                    const endIndex = startIndex + itemsPerPage;

                    tableRows.forEach(row => row.style.display = 'none');
                    filteredData.slice(startIndex, endIndex).forEach(row => {
                        row.style.display = '';
                    });
                }

                function updatePagination() {
                    const totalPages = Math.ceil(filteredData.length / itemsPerPage);
                    const pagination = document.getElementById('pagination' + tableId.slice(-1));
                    pagination.innerHTML = '';

                    // Previous button
                    if (totalPages > 1) {
                        const prevButton = document.createElement('button');
                        prevButton.textContent = '←';
                        prevButton.disabled = currentPage === 1;
                        prevButton.addEventListener('click', () => {
                            if (currentPage > 1) {
                                currentPage--;
                                updateTable();
                                updatePagination();
                            }
                        });
                        pagination.appendChild(prevButton);
                    }

                    // Page buttons
                    for (let i = 1; i <= totalPages; i++) {
                        const button = document.createElement('button');
                        button.textContent = i;
                        button.classList.toggle('active', i === currentPage);
                        button.addEventListener('click', () => {
                            currentPage = i;
                            updateTable();
                            updatePagination();
                        });
                        pagination.appendChild(button);
                    }

                    // Next button
                    if (totalPages > 1) {
                        const nextButton = document.createElement('button');
                        nextButton.textContent = '→';
                        nextButton.disabled = currentPage === totalPages;
                        nextButton.addEventListener('click', () => {
                            if (currentPage < totalPages) {
                                currentPage++;
                                updateTable();
                                updatePagination();
                            }
                        });
                        pagination.appendChild(nextButton);
                    }

                    // Pagination info
                    const paginationInfo = document.createElement('span');
                    paginationInfo.className = 'pagination-info';
                    paginationInfo.textContent = `Showing ${(currentPage - 1) * itemsPerPage + 1} to ${Math.min(currentPage * itemsPerPage, filteredData.length)} of ${filteredData.length} entries`;
                    pagination.appendChild(paginationInfo);
                }

                // Initial setup
                updateTable();
                updatePagination();
            }
        });
    </script>
</body>
</html>
