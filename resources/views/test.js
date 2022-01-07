class Jadwal {
    static batasAwalWaktu = "07.00";
    static batasAkhirWaktu = "18.00";

    static batasAwalHari = "Senin";
    static batasAkhirHari = "Selasa";

    static daftarHari = [
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu",
        "Minggu",
    ];

    constructor(matakuliah, tabelJadwal) {
        Jadwal.populateMatkul(matakuliah, 4, 1);
    }

    static populateMatkul(matkulliah, page_size, page_number) {
        var matkulElement = document.getElementById("mata-kuliah");
        var matkul = Jadwal.paginateArray(matkulliah, page_size, page_number);
        for (var i = 0; i < matkul.length; i++) {
            var matkulTerpilih = localStorage.getItem(`${matkul[i].nama}`);
            var element = ` <div class="mata-kuliah">             
                <div id="row-mata-kuliah" class="row">
                    <p>${matkul[i].nama}</p>

                    ${matkul[i].kelas
                        .map(
                            (kp) =>
                                `
                        <div id="kelas-paralel" class="col-sm-6" onclick="clickKelas(this)" kode="${
                            matkul[i].kode
                        }"  kp="${kp.kode}" data-kode-kelas="${kp.kode}">

                            <input id="btn-kelas" type="button" value="${
                                kp.kode
                            }"   
                            ${
                                matkulTerpilih == null
                                    ? "class='kelas-paralel'"
                                    : "class='kelas-paralel terpilih' terpilih='true'"
                            }>

                            ${kp.jadwal
                                .map(
                                    (jadwal) =>
                                        `
                                <p>${jadwal.hari} ${jadwal.waktuMulai} - ${jadwal.waktuBerakhir}</p>
                                `
                                )
                                .join("")}
                        </div>
                        `
                        )
                        .join("")}
                </div>
            </div>
            `;
            matkulElement.innerHTML += element;
        }
        Jadwal.populatePaging(matakuliah, page_size, page_number);
    }

    static populatePaging(data, dataPerPage, active) {
        var page = Math.ceil(data.length / dataPerPage);

        var end = 0;
        var start = 0;

        if (active > 3) {
            start = active - 3;
        } else {
            start = 1;
        }

        if (start < page - 3) {
            end = active + 3;
        } else {
            end = page;
        }

        var pageElement = document.getElementById("pagination");
        for (var i = start; i <= end; i++) {
            let element = `
            <div id="page" ${
                i == active
                    ? "class='page-number active'"
                    : "class='page-number'"
            }>
                <a href="#" onclick="clickPage(${i})" >${i}</a>
            </div>
                
            `;
            pageElement.innerHTML += element;
        }
    }

    static paginateArray(array, page_size, page_number) {
        return array.slice(
            (page_number - 1) * page_size,
            page_number * page_size
        );
    }

    static clickPage(number) {
        var matkulElement = document.getElementById("mata-kuliah");
        var pageElement = document.getElementById("pagination");
        pageElement.innerHTML = "";
        matkulElement.innerHTML = "";
        Jadwal.populateMatkul(matakuliah, 4, number);
    }

    static clickKelas(daftarMataKuliah, kelas, tabelJadwal) {
        const kp = kelas.attributes["kp"].value;
        const kode = kelas.attributes["kode"].value;

        const matkuldipilih = daftarMataKuliah.find(
            (matakuliah) => matakuliah.kode === kode
        );

        const kelasdipilih = matkuldipilih.kelas.find(
            (kelas) => kelas.kode == kp
        );

        if (kelas.firstElementChild.attributes["terpilih"]) {
            kelas.firstElementChild.classList.remove("terpilih");
            kelas.firstElementChild.removeAttribute("terpilih");
            // localStorage.removeItem(matkuldipilih.nama)
        } else {
            // localStorage.setItem(matkuldipilih.nama, JSON.stringify(kelasdipilih))
            kelas.firstElementChild.classList.add("terpilih");
            kelas.firstElementChild.setAttribute("terpilih", "true");
            console.log(kelasdipilih);
            Jadwal.selectClass(matkuldipilih, kelasdipilih, tabelJadwal);
        }

        // let asd = Object.keys(localStorage)
        // console.log(asd)
    }

    static selectClass(matkuldipilih, kelas, tabelJadwal) {
        kelas.jadwal.forEach((jadwal) => {
            const waktuMulai = Jadwal.stringToMinute(jadwal.waktuMulai);
            const waktuBerakhir = Jadwal.stringToMinute(jadwal.waktuBerakhir);
            const perbedaan = waktuBerakhir - waktuMulai;

            const divJadwal = tabelJadwal.tBodies[0]
                .querySelector(
                    `tr:nth-child(${
                        Number.parseInt(waktuMulai / 60) -
                        Jadwal.batasAwalWaktu +
                        1
                    })>td:nth-child(${
                        Jadwal.daftarHari.indexOf(jadwal.hari) + 2
                    })`
                )
                .appendChild(document.createElement("div"));

            divJadwal.classList.add("jadwal");

            divJadwal.style.height = `calc(${
                Number.parseInt(perbedaan / 60) * 4
            }rem + ${((perbedaan % 60) / 60) * 4}rem - 1px)`;

            divJadwal.style.marginTop = `calc(-0.05rem + ${
                ((waktuMulai % 60) / 60) * 4
            }rem + 1px)`;

            divJadwal.setAttribute("data-kode-mata-kuliah", matkuldipilih.kode);
            divJadwal.setAttribute("data-kode-kelas", kelas.kode);

            const divInformasiJadwal = divJadwal.appendChild(
                document.createElement("div")
            );

            divInformasiJadwal.classList.add("jadwal__detail");

            divInformasiJadwal.appendChild(
                document.createElement("p")
            ).textContent = matkuldipilih.nama;

            divInformasiJadwal.appendChild(
                document.createElement("p")
            ).textContent = `Kelas ${kelas.kode}`;

            divInformasiJadwal.appendChild(
                document.createElement("p")
            ).textContent = `${jadwal.waktuMulai} - ${jadwal.waktuBerakhir}`;
        });

        const time = Jadwal.totalMenitKeStringWaktu("420");
        console.log(time);

        // console.log(namaMatkul)
        // console.log(kelas)
        // console.log(tabelJadwal)
    }

    static stringToMinute(waktu) {
        const jam = Number.parseInt(waktu.substring(0, waktu.indexOf(".")));
        const menit = Number.parseInt(waktu.substring(waktu.indexOf(".") + 1));
        return jam * 60 + menit;
    }

    static totalMenitKeStringWaktu(totalMenit) {
        const jam = Number.parseInt(totalMenit / 60)
            .toString()
            .padStart(2, "0");
        const menit = (totalMenit % 60).toString().padStart(2, "0");
        return `${jam}.${menit}`;
    }

    static resetState() {
        console.log("reset");
        localStorage.clear();
        var matkulElement = document.getElementById("mata-kuliah");
        matkulElement.innerHTML = "";
        Jadwal.populateMatkul(matakuliah, 4, 1);
    }
}
