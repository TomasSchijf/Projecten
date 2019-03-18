using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace BTKassa
{
    /// <summary>
    /// Interaction logic for Factuur.xaml
    /// </summary>
    public partial class Factuur : Window
    {
        dcBTRDataContext db = new dcBTRDataContext();
        public Factuur()
        {
            InitializeComponent();
            SetData();
        }
        private void SetData()
        {
            cbCustomer.ItemsSource = db.customers.ToList();
            cbCustomer.DisplayMemberPath = "firstname";
            dgFactuur.ItemsSource = db.itemsinorders.ToList();


        }
        private void dgFactuur_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            MainWindow wmain = new MainWindow();
            wmain.Show();
            this.Close();
        }

        private void cbCustomer_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            if (cbCustomer.SelectedItem != null)
            {
                customer selCustomer = (customer)cbCustomer.SelectedItem;

                List<itemsinorder> myIIOs = new List<itemsinorder>();

                // List ophalen van je orders die de klant geplaatst heeft
                List<order> myOrders = (from o in db.orders
                                        where o.customerId == selCustomer.id
                                        select o).ToList();
                // Door de orders heen loopen en de itemsinorder bij die order ophalen -> in de list plaatsen (myIIOs.Add(HIER JE ITEM))
                foreach(order curOrder in myOrders)
                {
                    List<itemsinorder> lijstCustomer = (from iio in db.itemsinorders
                                         where iio.orderId == curOrder.id
                                         select iio).ToList();
                    myIIOs.AddRange(lijstCustomer);
                }
                dgFactuur.ItemsSource = myIIOs.ToList();
            }
        }
    }
}
