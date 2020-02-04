/**
 Copyright 2020 Prieto Linares, Jorge Fidel

 This file is part of Agenda Capacitaciones Yanbal.

 Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Agenda Capacitaciones Yanbal is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
 */

function UserCredits(opts) {
    var elements = {
        creditLog: $('#credit-log-content'),
        creditLogIndicator: $('#creditLogIndicator'),
        transactionLog: $('#transaction-log-content'),
        transactionLogIndicator: $('#transactionLogIndicator')
    };

    UserCredits.prototype.init = function () {
        $('#quantity').on('change', function (e) {
            ajaxGet(opts.calcQuantityUrl + $('#quantity').val(), null, function (data) {
                $('#totalCost').text(data);
            });
        });

        loadCreditLog(0, 0);
        loadTransactionLog(0, 0);
    };

    function loadCreditLog(page, pageSize) {
        elements.creditLogIndicator.removeClass('no-show');

        ajaxGet(opts.creditLogUrl.replace('[page]', page).replace('[pageSize]', pageSize), null, function (data) {
            elements.creditLogIndicator.addClass('no-show');
            elements.creditLog.html(data);

            ajaxPagination(elements.creditLog, function (page, size) {
                loadCreditLog(page, size);
            });
        });
    }

    function loadTransactionLog(page, pageSize) {
        elements.transactionLogIndicator.removeClass('no-show');

        ajaxGet(opts.transactionLogUrl.replace('[page]', page).replace('[pageSize]', pageSize), null, function (data) {
            elements.transactionLogIndicator.addClass('no-show');
            elements.transactionLog.html(data);

            ajaxPagination(elements.transactionLog, function (page, size) {
                loadTransactionLog(page, size);
            });
        });
    }
}