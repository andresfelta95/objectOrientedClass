public class Main {
    public static void main(String[] args) {        
        
        Car car = new Car("AMQ123", new Driver("Andres Camelo", "1A578D7W", "andrescamelo@yahoo.ca") );        
        car.passenger = 4;
        car.printDataCar();
        Driver driver = new Driver("Aniceto Molina", "ANIM162", "animoli@gmoli.com");
        driver.printDataAccount();
    }
}
