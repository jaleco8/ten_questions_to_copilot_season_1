void main() {
  int daysBetween(DateTime date1, DateTime date2) {
    return date2.difference(date1).inDays.abs();
  }

  int monthsBetween(DateTime date1, DateTime date2) {
    int months = (date2.year - date1.year) * 12;
    months -= date1.month;
    months += date2.month;
    return months.abs();
  }

  int yearsBetween(DateTime date1, DateTime date2) {
    return (date2.year - date1.year).abs();
  }

  int weeksBetween(DateTime date1, DateTime date2) {
    return ((date2.difference(date1).inDays.abs()) / 7).ceil();
  }

  int hoursBetween(DateTime date1, DateTime date2) {
    return date2.difference(date1).inHours.abs();
  }
  
  String dateDifference(DateTime date1, DateTime date2) {
    int days = daysBetween(date1, date2);
    int months = monthsBetween(date1, date2);
    int years = yearsBetween(date1, date2);

    if (days < 30) {
      return '$days días';
    } else if (months < 12) {
      return '$months meses';
    } else {
      return '$years años';
    }
  }
  
  DateTime date1 = DateTime(2023, 1, 1);
  DateTime date2 = DateTime(2023, 9, 6);

  int days = daysBetween(date1, date2);
  int months = monthsBetween(date1, date2);
  int years = yearsBetween(date1, date2);
  int weeks = weeksBetween(date1, date2);
  int hours = hoursBetween(date1, date2);
  String dateDiff = dateDifference(date1, date2);

  print('Días transcurridos: $days');
  print('Meses transcurridos: $months');
  print('Años transcurridos: $years');
  print('Semanas transcurridos: $weeks');
  print('Horas transcurridos: $hours');
  print('Han Transcurrido: $dateDiff');
}