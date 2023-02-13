document.querySelector('button').onclick = saveAsFile, ready

function saveAsFile(fileName, data = '', postfix = (+(new Date)).toString()) {
  if (typeof document === 'undefined')
    throw 'Предназначено для работы в браузере!';

    var lnk = document.createElement('a');
    lnk.href = `data:text/plain;content-disposition=attachment;filename=${fileName},${data}`
    lnk.download = fileName;
    lnk.target = '_blank';
    lnk.style.display = 'none';
    lnk.id = `downloadlnk-${postfix}`;
    document.body.appendChild(lnk);
    lnk.click();
    document.body.removeChild(lnk);
}
function ready(saveAsFile){
    saveAsFile('Текстовый файл.txt', document.getElementById('.FF').value + '\n');
}





//Задачи функции: при нажатии на кнопку из текстового поля брать текст и записывать в консоль
//Функция создания файла