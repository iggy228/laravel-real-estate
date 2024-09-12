import './bootstrap';
// CSS Library
import 'bootstrap';

const filterMenuHeaderEl = document.getElementById('filterMenuHeader')

function activateFilterMenuCollapseOnScreenWidth(width) {
    if (width > 768) {
        console.log(width)
        filterMenuHeaderEl.setAttribute('data-bs-toggle', '')
    } else {
        console.log(width)
        filterMenuHeaderEl.setAttribute('data-bs-toggle', 'collapse')
    }
}

document.body.onresize = () => {
    activateFilterMenuCollapseOnScreenWidth(document.body.clientWidth)
}

activateFilterMenuCollapseOnScreenWidth(document.body.clientWidth)
