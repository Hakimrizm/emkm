import {
    renderExpenseCategoryPieChart,
    renderIncomeCategoryPieChart,
    renderIncomeExpenseLineChart,
} from "./pages/dashboard/chart-income-expense";

document.addEventListener("DOMContentLoaded", () => {
    const monthlyData = {
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "Mei",
            "Jun",
            "Jul",
            "Agt",
            "Sep",
            "Oct",
            "nov",
            "Des",
        ],
        income: [
            5000000, 7000000, 8000000, 6000000, 9000000, 9000000, 7000000,
            5000000, 3000000, 3000000, 4000000, 5000000,
        ],
        expense: [
            3000000, 4000000, 4500000, 5000000, 6000000, 6000000, 4500000,
            3000000, 4000000, 3000000, 4000000, 4500000,
        ],
    };

    const incomeByCategory = {
        labels: ["Penjualan", "Investasi", "Lainnya"],
        values: [60, 30, 10],
    };

    const expenseByCategory = {
        labels: ["Bahan Baku", "Operasional", "Lainnya"],
        values: [50, 40, 10],
    };

    renderIncomeExpenseLineChart("line-chart", monthlyData);
    renderIncomeCategoryPieChart("income-pie-chart", incomeByCategory);
    renderExpenseCategoryPieChart("expense-pie-chart", expenseByCategory);
});
