package BinarySearch;

public class BinarySearch {
    public static void main(String[] args) {
        int[] arr = new int[]{1, 8 , 9, 30, 50, 100, 200, 1000, 28888};
        int index = binarySearch(arr, 9);
        System.out.println(index);
    }

    public static int binarySearch(int[] arr, int val) {
        int low = 0;
        int high = arr.length - 1;
        System.out.println(high);
        while (low <= high) {
            int mid = (low + high) / 2;
            if (arr[mid] > val) {
                high = mid - 1;
            } else if (arr[mid] > val) {
                low = mid + 1;
            } else {
                return mid;
            }
        }

        return -1;
    }
}
