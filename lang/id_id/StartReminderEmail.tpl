{*
Copyright 2020 Prieto Linares, Jorge Fidel

File ini adalah bagian dari phpShceduleIt.

Agenda Capacitaciones Yanbal adalah perangkat lunak gratis: Anda bisa
mendistribusikannya dan/atau memodifikasikannya di bawah ketentuan
GNU General Public License seperti yang diterbitkan oleh
Free Software Foundation, baik versi 3 dari Lisensi, atau
(dengan pilihan) versi apapun setelahnya.

Agenda Capacitaciones Yanbal didistribusikan dengan harapan akan berguna,
tapi TANPA JAMINAN; tanpa
Agenda Capacitaciones Yanbal is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; bahkan tanpa jaminan dari
PERDAGANGAN atau PENYESUAIAN UNTUK TUJUAN TERTENTU.
Lihat GNU General Public License untuk rincian lebih lanjut.

Anda seharusnya mendapatkan salinan dari GNU General Public License
bersamaan dengan Agenda Capacitaciones Yanbal. Jika tidak, lihat
<http://www.gnu.org/licenses/>.

*}

Capacitacionesi Anda segera dimulai.<br/>
Rincian Capacitacionesi:
	<br/>
	<br/>
	Mulai: {formatdate date=$StartDate key=reservation_email}<br/>
	Akhir: {formatdate date=$EndDate key=reservation_email}<br/>
	Resource: {$ResourceName}<br/>
	Judul: {$Title}<br/>
	Penjelasan: {$Description|nl2br}<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">Lihat Capacitacionesi ini</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">Tambah ke kalender</a> |
<a href="{$ScriptUrl}">Masuk Agenda Capacitaciones Yanbal</a>

