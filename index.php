<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src = "js/script.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="employee">

        <div class="s-top">
            <div class = "s-logo-block width-1">
                <span class = "s-logo">Сотрудники</span>
            </div>
            <div class = "s-search-block">
                <input type="text" class = "s-input" placeholder = "Поиск">
            </div>
            <div class = "s-common-info">
                <div class = "s-common-info-block">
                    <p class = "s-info-text">Всего сотрудников: <span class = "thin-font">320</span></p>
                    <p class = "s-info-text">Всего онлайн: <span class = "thin-font">180</span></p>
                </div>
                <div class = "s-common-info-block">
                    <p class = "s-info-text">Москва: <span class = "thin-font">200</span></p>
                    <p class = "s-info-text">Тула: <span class = "thin-font">100</span></p>
                </div>
                <div class = "s-common-info-block">
                    <p class = "s-info-text">Выходной: <span class = "thin-font">140</span></p>
                </div>
            </div>
        </div>

        <div class="s-wrapper">
            <div class = "s-left width-1 grey-block">
                <div class = "s-left-wrap">
                    <div class="s-tabs">
                        <!-- 1ая вкладка -->
                        <div class="s-tab s-tab-show">
                            <div class="s-tab-header">
                                <span class = "s-tab-title">Отдел</span>
                                <p class = "s-tab-show-hide">
                                    <span class = "show-hide-text bold-font">Свернуть</span>
                                    <svg height="512px" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                        <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                            <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                        </svg>
                                    </p>
                                    <hr class = "s-tab-hr">
                                </div>
                                <div class="s-tab-content">
                                    <div class="s-tab-content-inside">
                                        <form action="">
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="all-s" checked="checked">
                                                <label class="radio_label" for="all-s">Все (<span class = "">320</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="private-s">
                                                <label class="radio_label" for="private-s">Частный отдел (<span class = "">6</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="corp-s">
                                                <label class="radio_label" for="corp-s">Корпоративный отдел (<span class = "">20</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="consult-s">
                                                <label class="radio_label" for="consult-s">Консультант (<span class = "">3</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="account-s">
                                                <label class="radio_label" for="account-s">Бухгалтерия (<span class = "">12</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="private-s2">
                                                <label class="radio_label" for="private-s2">Частный отдел (<span class = "">6</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="corp-s2">
                                                <label class="radio_label" for="corp-s2">Корпоративный отдел (<span class = "">20</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="consult-s2">
                                                <label class="radio_label" for="consult-s2">Консультант (<span class = "">3</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="account-s1">
                                                <label class="radio_label" for="account-s1">Бухгалтерия (<span class = "">12</span>)</label>
                                            </div>
                                                                                    <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="private-s3">
                                                <label class="radio_label" for="private-s3">Частный отдел (<span class = "">6</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="corp-s3">
                                                <label class="radio_label" for="corp-s3">Корпоративный отдел (<span class = "">20</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="consult-s3">
                                                <label class="radio_label" for="consult-s3">Консультант (<span class = "">3</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="account-s2">
                                                <label class="radio_label" for="account-s2">Бухгалтерия (<span class = "">12</span>)</label>
                                            </div>
                                            <div class="s-tab-item">
                                                <input class="radio_input" name="employee-tab" type="radio" id="account-s3">
                                                <label class="radio_label" for="account-s3">Бухгалтерия (<span class = "">12</span>)</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- 1ая вкладка, конец -->
                            <!-- 2ая вкладка -->
                            <div class="s-tab">
                                <div class="s-tab-header">
                                    <span class = "s-tab-title">Группа</span>
                                    <p class = "s-tab-show-hide">
                                        <span class = "show-hide-text bold-font">Показать</span>
                                        <svg height="512px" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                            <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g>
                                                <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                            </svg>
                                        </p>
                                        <hr class = "s-tab-hr">
                                    </div>
                                    <div class="s-tab-content">
                                        <div class="s-tab-content-inside"></div>
                                    </div>
                                </div>
                                <!-- 2ая вкладка, конец -->
                                <!-- 3ая вкладка -->
                                <div class="s-tab">
                                    <div class="s-tab-header">
                                        <span class = "s-tab-title">Город</span>
                                        <p class = "s-tab-show-hide">
                                            <span class = "show-hide-text bold-font">Показать</span>
                                            <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                    <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                </svg>
                                            </p>
                                            <hr class = "s-tab-hr">
                                        </div>
                                        <div class="s-tab-content">
                                            <div class="s-tab-content-inside"></div>
                                        </div>
                                    </div>
                                    <!-- 3ая вкладка, конец -->
                                    <!-- 4ая вкладка -->
                                    <div class="s-tab">
                                        <div class="s-tab-header">
                                            <span class = "s-tab-title">Онлайн</span>
                                            <p class = "s-tab-show-hide">
                                                <span class = "show-hide-text bold-font">Показать</span>
                                                <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                    <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                        <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                    </svg>
                                                </p>
                                                <hr class = "s-tab-hr">
                                            </div>
                                            <div class="s-tab-content">
                                                <div class="s-tab-content-inside"></div>
                                            </div>
                                        </div>
                                        <!-- 4ая вкладка, конец -->
                                        <!-- 5ая вкладка -->
                                        <div class="s-tab">
                                            <div class="s-tab-header">
                                                <span class = "s-tab-title">Выходной</span>
                                                <p class = "s-tab-show-hide">
                                                    <span class = "show-hide-text bold-font">Показать</span>
                                                    <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                        <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                            <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                        </svg>
                                                    </p>
                                                    <hr class = "s-tab-hr">
                                                </div>
                                                <div class="s-tab-content">
                                                    <div class="s-tab-content-inside"></div>
                                                </div>
                                            </div>
                                            <!-- 5ая вкладка, конец -->
                                            <!-- 6ая вкладка -->
                                            <div class="s-tab">
                                                <div class="s-tab-header">
                                                    <span class = "s-tab-title">Офис</span>
                                                    <p class = "s-tab-show-hide">
                                                        <span class = "show-hide-text bold-font">Показать</span>
                                                        <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                            <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                                <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                            </svg>
                                                        </p>
                                                        <hr class = "s-tab-hr">
                                                    </div>
                                                    <div class="s-tab-content">
                                                        <div class="s-tab-content-inside"></div>
                                                    </div>
                                                </div>
                                                <!-- 6ая вкладка, конец -->
                                                <!-- 7ая вкладка -->
                                                <div class="s-tab">
                                                    <div class="s-tab-header">
                                                        <span class = "s-tab-title">Отдел</span>
                                                        <p class = "s-tab-show-hide">
                                                            <span class = "show-hide-text bold-font">Показать</span>
                                                            <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                                <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                                    <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                                </svg>
                                                            </p>
                                                            <hr class = "s-tab-hr">
                                                        </div>
                                                        <div class="s-tab-content">
                                                            <div class="s-tab-content-inside"></div>
                                                        </div>
                                                    </div>
                                                    <!-- 7ая вкладка, конец -->
                                                    <!-- 8ая вкладка -->
                                                    <div class="s-tab">
                                                        <div class="s-tab-header">
                                                            <span class = "s-tab-title">Награды</span>
                                                            <p class = "s-tab-show-hide">
                                                                <span class = "show-hide-text bold-font">Показать</span>
                                                                <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                                    <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                                        <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                                    </svg>
                                                                </p>
                                                                <hr class = "s-tab-hr">
                                                            </div>
                                                            <div class="s-tab-content">
                                                                <div class="s-tab-content-inside"></div>
                                                            </div>
                                                        </div>
                                                        <!-- 8ая вкладка, конец -->
                                                        <!-- 9ая вкладка -->
                                                        <div class="s-tab">
                                                            <div class="s-tab-header">
                                                                <span class = "s-tab-title">Новенькие</span>
                                                                <p class = "s-tab-show-hide">
                                                                    <span class = "show-hide-text bold-font">Показать</span>
                                                                    <svg height="512px" style="fill:#9B9C9D;" viewBox="0 0 512 512" width="512px" class = "plus-svg">
                                                                        <g id="_x37_22-_add__x2C__add_more__x2C__plus__x2C_"><g><line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="256.486" x2="256.486" y1="26.814" y2="486.139"/>
                                                                            <line style="fill:none;stroke:#9B9C9D;stroke-width:13.4167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:2.6131;" x1="486.238" x2="26.711" y1="256.477" y2="256.477"/></g></g><g/>
                                                                        </svg>
                                                                    </p>
                                                                    <hr class = "s-tab-hr">
                                                                </div>
                                                                <div class="s-tab-content">
                                                                    <div class="s-tab-content-inside"></div>
                                                                </div>
                                                            </div>
                                                            <!-- 9ая вкладка, конец -->
                                                        </div>
                                                    </div>
                                                    <div class = "reset-filters">
                                                        <span>Сбросить фильтр</span>
                                                    </div>
                                                </div>

                                                <div class="s-center width-2">
                                                    <div class="s-center-wrap">

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Частный отдел (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card employee-card-rop">
                                                                    <div class="s-status-wrap">
                                                                        <span class = "changing-text">Заменяет:</span>
                                                                        <span class = "changing-manager">Елизавета (141)</span>
                                                                        <span class = "changing-weekend">Выходной</span>
                                                                        <div class="s-status s-working"></div>
                                                                    </div>
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="s-rewards border-grey-top">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                        <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Блок сотрудников -->

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Группа 1 (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class ="s-role-name">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-weekend"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card employee-card-active">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-weekend"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Блок сотрудников -->

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Группа 1 (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card"></div>
                                                                <div class="employee-card"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Блок сотрудников -->

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Группа 1 (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-weekend"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card"></div>
                                                                <div class="employee-card"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Блок сотрудников -->

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Группа 1 (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card"></div>
                                                                <div class="employee-card"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Блок сотрудников -->

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Группа 1 (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-weekend"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card"></div>
                                                                <div class="employee-card"></div>
                                                            </div>
                                                        </div>
                                                        <!-- Блок сотрудников -->

                                                        <!-- Блок сотрудников -->
                                                        <div class="department-section">
                                                            <h3 class="s-center-title">Группа 1 (6)</h3>
                                                            <div class="s-cards">
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="employee-card">
                                                                    <div class="manager-pic" style = "background-image: url('img/m.jpg');">
                                                                        <div class="manager-pic-info">РОП</div>
                                                                    </div>
                                                                    <div class="manager-info">
                                                                        <div class = "s-login">Екатерина</div>
                                                                        <div class = "s-full-name">Чеботарева Екатерина Юрьевна</div>
                                                                        <div class = "s-role">
                                                                            <span class = "s-role-name bold-font">Руководители отдела продаж</span>
                                                                            <span class = "s-role-group">Группа 1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="manager-phone-info">
                                                                        <div class="s-status-wrap">
                                                                            <div class="s-status s-working"></div>
                                                                        </div>
                                                                        <div class="s-additional">
                                                                            <p>Доб.: <span>109</span></p>
                                                                        </div>
                                                                        <div class="department-type">
                                                                            <span class = "bold-font">Частный отдел</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Блок сотрудников -->
                                                    </div>
                                                </div>

                                                <div class="s-right width-3">
                                                    <div class = "get-this-login">
                                                        <a class = "get-this-login-link">Взять этот логин</a>
                                                    </div>
                                                    <div class="s-right-wrap">
                                                        <div class = "add-more-pics">
                                                            <a href="" class = "add-more-pics-link"></a>
                                                        </div>
                                                        <div class="s-large-img"></div>
                                                        <div class="large-phone-status">
                                                            <div class = "s-large-status"></div>
                                                            <div class = "s-phone">
                                                                <span>Доб.: </span>
                                                                <span>165</span>
                                                            </div>
                                                        </div>
                                                        <div class="s-status-block">
                                                            <div class="s-day-off">
                                                                <span>Выходной</span>
                                                            </div>
                                                            <div class="s-manager-change">
                                                                <span><b>Заменяет:</b></span>
                                                                <span class = "s-manager-change-name">Елизавета (141)</span>
                                                            </div>
                                                        </div>

                                                        <div class="large-info-card">

                                                            <div class="large-login">
                                                                <span>Василиса</span>
                                                            </div>
                                                            <div class="large-full-name">
                                                                <span>Цветкова Анастасия</span>
                                                            </div>
                                                            <div class="large-full-phones padding-bottom-5">
                                                                <div class = "padding-bottom-5">
                                                                    <span class = "medium-font">Телефон: </span>
                                                                    <span>+7 (985) 191-22-52</span>
                                                                </div>
                                                                <div>
                                                                    <span>+7 (985) 856-69-85</span>
                                                                </div>
                                                            </div>
                                                            <div class="large-email padding-bottom-5">
                                                                <span class = "medium-font">Email: </span>
                                                                <a href= "mailto:vasilisa195@r777.ru" class = "s-manager-email">vasilisa195@r777.ru</a>
                                                            </div>
                                                            <div class="large-icq padding-bottom-5">
                                                                <span class = "medium-font">ICQ: </span><span>725129989</span>
                                                            </div>

                                                            <div class="large-working-time padding-bottom-5">
                                                                <div>
                                                                    <span class = "medium-font">Рабочее время: </span>
                                                                    <span>10:00 - 19:00</span>
                                                                </div>
                                                                <div>
                                                                    <span>3 г. 4 мес. 2 д.</span>
                                                                </div>
                                                            </div>

                                                            <div class = "large-group padding-bottom-5">
                                                                <span class = "medium-font">Группа: </span><span class = "border-bottom-dashed">1</span>
                                                            </div>

                                                            <div class = "large-city padding-bottom-5">
                                                                <span class = "medium-font">Город: </span><span class = "border-bottom-dashed">Москва</span>
                                                            </div>

                                                            <div class = "large-department">
                                                                <span class = "medium-font">Отдел: </span><span class = "border-bottom-dashed">Частный отдел</span>
                                                            </div>

                                                            <div class="s-rewards">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                                <img src="img/33.png" alt="" class = "s-reward-pic">
                                                                <img src="img/34.png" alt="" class = "s-reward-pic">
                                                                <img src="img/35.png" alt="" class = "s-reward-pic">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </body>
                                    </html>