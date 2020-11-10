function isThaichar(str, obj) {
    var orgi_text = "ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝู฿ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ ";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isEngchar(str, obj) {
    var orgi_text = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz ";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isAllchar(str, obj) {
    var orgi_text = " 0123456789๑๒๓๔๕๖๗๘๙๐AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝู฿ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}


function isTHandNumchar(str, obj) {
    var orgi_text = "ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝู฿ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ 0123456789๑๒๓๔๕๖๗๘๙๐";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isENandNumchar(str, obj) {
    var orgi_text = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz 0123456789";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isNumAllchar(str, obj) {
    var orgi_text = "0123456789๑๒๓๔๕๖๗๘๙๐";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isNumEngchar(str, obj) {
    var orgi_text = "0123456789";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isNumTHchar(str, obj) {
    var orgi_text = "๑๒๓๔๕๖๗๘๙๐";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isHomeNumchar(str, obj) {
    var orgi_text = "๑๒๓๔๕๖๗๘๙๐/0123456789";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isRoadchar(str, obj) {
    var orgi_text = " .0123456789๑๒๓๔๕๖๗๘๙๐AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZzๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝู฿ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦ";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isDoublechar(str, obj) {
    var orgi_text = ".0123456789";
    var str_length = str.length;
    var str_length_end = str_length - 1;
    var isThai = true;
    var Char_At = "";
    for (i = 0; i < str_length; i++) {
        Char_At = str.charAt(i);
        if (orgi_text.indexOf(Char_At) == -1) {
            isThai = false;
        }
    }
    if (str_length >= 1) {
        if (isThai == false) {
            obj.value = str.substr(0, str_length_end);
        }
    }
    return isThai; // ถ้าเป็น true แสดงว่าเป็นภาษาไทยทั้งหมด
}

function isPhoneNo(input) {
    var regExp = /^0[0-9]{8,9}$/i;
    return regExp.test(input);
}

function isEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}