public class Main {
    public static void main(String[] args) {        
        
        UberX uberX = new UberX("AMQ123", new Driver("Andres Camelo", "1A578D7W", "andrescamelo@yahoo.ca"),"Chevrolet", "Sonic");        
        uberX.setPassenger(4);
        uberX.printDataCar();
        Driver driver = new Driver("Aniceto Molina", "ANIM162", "animoli@gmoli.com");
        driver.printDataAccount();
    }
}
