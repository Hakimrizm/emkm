import Chart from "chart.js/auto";

export function renderIncomeExpenseLineChart(canvasId, data) {
    const ctx = document.getElementById(canvasId);
    new Chart(ctx, {
        type: "line",
        data: {
            labels: data.labels,
            datasets: [
                {
                    label: "Income",
                    data: data.income,
                    borderColor: "rgba(0, 123, 255, 1)",
                    backgroundColor: "rgba(0, 123, 255, 0.2)",
                    tension: 0.4,
                },
                {
                    label: "Expense",
                    data: data.expense,
                    borderColor: "rgba(220, 53, 69, 1)",
                    backgroundColor: "rgba(220, 53, 69, 0.2)",
                    tension: 0.4,
                },
            ],
        },
        options: {
            responsive: true,
        },
    });
}

export function renderIncomeCategoryPieChart(canvasId, data) {
    const ctx = document.getElementById(canvasId);
    new Chart(ctx, {
        type: "pie",
        data: {
            labels: data.labels,
            datasets: [
                {
                    label: "Income by Category",
                    data: data.values,
                    backgroundColor: [
                        "#007bff",
                        "#6610f2",
                        "#6f42c1",
                        "#e83e8c",
                        "#fd7e14",
                        "#28a745",
                    ],
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                title: {
                    display: true,
                    text: "Total Pemasukan Berdasarkan Kategori",
                },
            },
        },
    });
}

export function renderExpenseCategoryPieChart(canvasId, data) {
    const ctx = document.getElementById(canvasId);
    new Chart(ctx, {
        type: "pie",
        data: {
            labels: data.labels,
            datasets: [
                {
                    label: "Expense by Category",
                    data: data.values,
                    backgroundColor: [
                        "#dc3545",
                        "#ffc107",
                        "#17a2b8",
                        "#20c997",
                        "#6c757d",
                        "#343a40",
                    ],
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                title: {
                    display: true,
                    text: "Total Pengeluaran Berdasarkan Kategori",
                },
            },
        },
    });
}
