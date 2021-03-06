const area = document.querySelector(".annoumcments-area"),
    button = area.querySelector(".show-more-btn");


const placeAnnouncements = async () => {

    let data = [];
    try {
        data = await axios.get('/EcoWorldWithPHP/EcoworldOnLaravel/public/announcements')
    }
    catch (error) {
        console.log(error);
    }

    let rows = []

    if (window.innerWidth <= 550) {
        rows = configureAnnouncementsOnScreen(2, data.data);
    } else if (window.innerWidth > 550 && window.innerWidth <= 800) {
        rows = configureAnnouncementsOnScreen(3, data.data);
    } else {
        rows = configureAnnouncementsOnScreen(4, data.data);
    }

    const elements = area.querySelectorAll(".annoumcment-row");
    elements.forEach(element => element.remove())
    rows.reverse().forEach(row => {
        area.insertAdjacentHTML('afterbegin', row);
    })

    let nonDisplayedRows = selectNonDisplayedRows();
    if (nonDisplayedRows.length !== 0) {
        button.style.display = 'flex';
    }
}

function configureAnnouncementsOnScreen(size, announcements) {
    let rows = [];
    let count = 0, rowCount = 0;
    announcements.forEach(item => {

        if (count === 0) {
            rows[rowCount] = ["<div class='annoumcment-row'>"];
        } else if ((count % size) === 0) {
            rows[rowCount] += "</div>";
            rows[++rowCount] = "<div class='annoumcment-row'>";
        }
        rows[rowCount] += ` <div class="annoumcment-block">
                                <div class="image-part">
                                    <a href='announcements/${item.id}' >
                                    <img src='images/${item.imagesUrl[0]}'></a>
                                    <img class="heart-image">
                                    <div class="person-info">
                                        <p>${item.personCount}</p>
                                        <img class="person-image">
                                    </div>
                                </div>
                                <div class="info-part">
                                    <p class="title">${item.title}</p>
                                    <p class="location-info">??????????????: ${item.location}</p>
                                    <p class="date-info">????????: ${item.date}</p>
                                </div>
                            </div>`;
        count++;

        if (count === announcements.length) {
            rows[rowCount] += "</div>";
        }
    });
    return rows;
}

window.addEventListener('resize', placeAnnouncements);
placeAnnouncements();

function selectNonDisplayedRows() {
    let rows = area.querySelectorAll('.annoumcment-row');
    let nonDisplayedRows = [];
    rows.forEach(row => {
        var style = window.getComputedStyle(row);
        if (style.display === 'none') {
            nonDisplayedRows.push(row);
        }
    });
    return nonDisplayedRows;
}

button.addEventListener('click', () => {
    var nonDisplayedRows = selectNonDisplayedRows();

    if (nonDisplayedRows.length != 0) {
        var rowToDisplay = nonDisplayedRows[0];
        rowToDisplay.style.display = 'flex';
        nonDisplayedRows.shift();
    }

    if (nonDisplayedRows.length == 0) {
        button.style.display = 'none';
    }
});
