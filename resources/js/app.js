import './bootstrap';
import 'preline';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()
import '@fortawesome/fontawesome-free/css/fontawesome.css';
import '@fortawesome/fontawesome-free/css/regular.css';
import '@fortawesome/fontawesome-free/css/solid.css';
import '@fortawesome/fontawesome-free/css/brands.css';


function tableComponent() {
    return {
        selectedRows: [],
        allSelected: false,
        toggleAllSelections() {
            if (this.allSelected) {
                this.selectedRows = this.$refs.table.querySelectorAll('tbody tr').map(row => row.dataset.id);
            } else {
                this.selectedRows = [];
            }
        },
    }
}
