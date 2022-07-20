public class Car {
    Integer id;
    String license;
    Account driver;
    protected Integer passenger;
    
    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar() {
        System.out.println("License: " + license);
        System.out.println("Driver: " + driver.name);
        System.out.println("Passengers Allowed: " + passenger);
    }

    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger(Integer passenger){
        if (passenger >= 4) {
            this.passenger = passenger;
        }
        else{
            System.out.println("Please set a number equal or higer than 4");
        }
    }
}
