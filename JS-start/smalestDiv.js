export default function  smallestDivisor (n)
{
    if (n == 1) return 1;
    function iter(acc)
    {
      if (n % acc === 0) { return  acc; } // проверка окончания процесса
      else {return iter(acc+1);} // получение нового состояния
    }

    return iter(2); // задание начального состояния

}
// END
/*
Рекурсивный процесс это чувак, который все дела откладывает на вечер пятницы.
 В течение недели у него мало работы, а в пятницу завал. Но ему так нравится :)

Итеративный процесс это чувак, который все делает при первой возможности.
 У него работа равномерно распределена по неделе, а пятница — просто обычный день, но последний.
 */

 export default function  smallestDivisor (n)
 {
    if (n == 1) return 1;
    if (n < 1) return NaN;
    let div = 2;

    while (n % div !== 0)
    {
      if (n == div) return n;
      div ++;

    }
    return div;
 }
