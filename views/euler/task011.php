<?php

/* @var $this yii\web\View */

$this->title = 'Project Euler Task11';
?>
<div class="euler-task1">
    <h1 class="display-4", style="text-align: center">Проект Эйлера</h1>
    <div>
        <a href="/web/euler/tasks">Back to list</a>
    </div>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Задача №11</h1>
        <h2>Наибольшее произведение в таблице.</h2>
        <p class="lead">






В таблице 20×20 (внизу) четыре числа на одной диагонали выделены красным.<br><br>
<table style="margin:0 auto;" cellspacing = "10">
<tr>
    <td>08</td> <td>02</td> <td>22</td> <td>97</td> <td>38</td> <td>15</td> <td>00</td> <td>40</td> <td>00</td> <td>75</td> <td>04</td> <td>05</td> <td>07</td> <td>78</td> <td>52</td> <td>12</td> <td>50</td> <td>77</td> <td>91</td> <td>08</td>
</tr>
<tr>
    <td>49</td> <td>49</td> <td>99</td> <td>40</td> <td>17</td> <td>81</td> <td>18</td> <td>57</td> <td>60</td> <td>87</td> <td>17</td> <td>40</td> <td>98</td> <td>43</td> <td>69</td> <td>48</td> <td>04</td> <td>56</td> <td>62</td> <td>00</td>
</tr>
<tr>
    <td>81</td> <td>49</td> <td>31</td> <td>73</td> <td>55</td> <td>79</td> <td>14</td> <td>29</td> <td>93</td> <td>71</td> <td>40</td> <td>67</td> <td>53</td> <td>88</td> <td>30</td> <td>03</td> <td>49</td> <td>13</td> <td>36</td> <td>65</td>
</tr>
<tr>
    <td>52</td> <td>70</td> <td>95</td> <td>23</td> <td>04</td> <td>60</td> <td>11</td> <td>42</td> <td>69</td> <td>24</td> <td>68</td> <td>56</td> <td>01</td> <td>32</td> <td>56</td> <td>71</td> <td>37</td> <td>02</td> <td>36</td> <td>91</td>
</tr>
<tr>
    <td>22</td> <td>31</td> <td>16</td> <td>71</td> <td>51</td> <td>67</td> <td>63</td> <td>89</td> <td>41</td> <td>92</td> <td>36</td> <td>54</td> <td>22</td> <td>40</td> <td>40</td> <td>28</td> <td>66</td> <td>33</td> <td>13</td> <td>80</td>
</tr>
<tr>
    <td>24</td> <td>47</td> <td>32</td> <td>60</td> <td>99</td> <td>03</td> <td>45</td> <td>02</td> <td>44</td> <td>75</td> <td>33</td> <td>53</td> <td>78</td> <td>36</td> <td>84</td> <td>20</td> <td>35</td> <td>17</td> <td>12</td> <td>50</td>
</tr>
<tr>
    <td>32</td> <td>98</td> <td>81</td> <td>28</td> <td>64</td> <td>23</td> <td>67</td> <td>10</td> <td style="color:red;">26</td> <td>38</td> <td>40</td> <td>67</td> <td>59</td> <td>54</td> <td>70</td> <td>66</td> <td>18</td> <td>38</td> <td>64</td> <td>70</td>
</tr>
<tr>
    <td>67</td> <td>26</td> <td>20</td> <td>68</td> <td>02</td> <td>62</td> <td>12</td> <td>20</td> <td>95</td> <td style="color:red;">63</td> <td>94</td> <td>39</td> <td>63</td> <td>08</td> <td>40</td> <td>91</td> <td>66</td> <td>49</td> <td>94</td> <td>21</td>
</tr>
<tr>
    <td>24</td> <td>55</td> <td>58</td> <td>05</td> <td>66</td> <td>73</td> <td>99</td> <td>26</td> <td>97</td> <td>17</td> <td style="color:red;">78</td> <td>78</td> <td>96</td> <td>83</td> <td>14</td> <td>88</td> <td>34</td> <td>89</td> <td>63</td> <td>72</td>
</tr>
<tr>
    <td>21</td> <td>36</td> <td>23</td> <td>09</td> <td>75</td> <td>00</td> <td>76</td> <td>44</td> <td>20</td> <td>45</td> <td>35</td> <td style="color:red;">14</td> <td>00</td> <td>61</td> <td>33</td> <td>97</td> <td>34</td> <td>31</td> <td>33</td> <td>95</td>
</tr>
<tr>
    <td>78</td> <td>17</td> <td>53</td> <td>28</td> <td>22</td> <td>75</td> <td>31</td> <td>67</td> <td>15</td> <td>94</td> <td>03</td> <td>80</td> <td>04</td> <td>62</td> <td>16</td> <td>14</td> <td>09</td> <td>53</td> <td>56</td> <td>92</td>
</tr>
<tr>
    <td>16</td> <td>39</td> <td>05</td> <td>42</td> <td>96</td> <td>35</td> <td>31</td> <td>47</td> <td>55</td> <td>58</td> <td>88</td> <td>24</td> <td>00</td> <td>17</td> <td>54</td> <td>24</td> <td>36</td> <td>29</td> <td>85</td> <td>57</td>
</tr>
<tr>
    <td>86</td> <td>56</td> <td>00</td> <td>48</td> <td>35</td> <td>71</td> <td>89</td> <td>07</td> <td>05</td> <td>44</td> <td>44</td> <td>37</td> <td>44</td> <td>60</td> <td>21</td> <td>58</td> <td>51</td> <td>54</td> <td>17</td> <td>58</td>
</tr>
<tr>
    <td>19</td> <td>80</td> <td>81</td> <td>68</td> <td>05</td> <td>94</td> <td>47</td> <td>69</td> <td>28</td> <td>73</td> <td>92</td> <td>13</td> <td>86</td> <td>52</td> <td>17</td> <td>77</td> <td>04</td> <td>89</td> <td>55</td> <td>40</td>
</tr>
<tr>
    <td>04</td> <td>52</td> <td>08</td> <td>83</td> <td>97</td> <td>35</td> <td>99</td> <td>16</td> <td>07</td> <td>97</td> <td>57</td> <td>32</td> <td>16</td> <td>26</td> <td>26</td> <td>79</td> <td>33</td> <td>27</td> <td>98</td> <td>66</td>
</tr>
<tr>
    <td>88</td> <td>36</td> <td>68</td> <td>87</td> <td>57</td> <td>62</td> <td>20</td> <td>72</td> <td>03</td> <td>46</td> <td>33</td> <td>67</td> <td>46</td> <td>55</td> <td>12</td> <td>32</td> <td>63</td> <td>93</td> <td>53</td> <td>69</td>
</tr>
<tr>
    <td>04</td> <td>42</td> <td>16</td> <td>73</td> <td>38</td> <td>25</td> <td>39</td> <td>11</td> <td>24</td> <td>94</td> <td>72</td> <td>18</td> <td>08</td> <td>46</td> <td>29</td> <td>32</td> <td>40</td> <td>62</td> <td>76</td> <td>36</td>
</tr>
<tr>
    <td>20</td> <td>69</td> <td>36</td> <td>41</td> <td>72</td> <td>30</td> <td>23</td> <td>88</td> <td>34</td> <td>62</td> <td>99</td> <td>69</td> <td>82</td> <td>67</td> <td>59</td> <td>85</td> <td>74</td> <td>04</td> <td>36</td> <td>16</td>
</tr>
<tr>
    <td>20</td> <td>73</td> <td>35</td> <td>29</td> <td>78</td> <td>31</td> <td>90</td> <td>01</td> <td>74</td> <td>31</td> <td>49</td> <td>71</td> <td>48</td> <td>86</td> <td>81</td> <td>16</td> <td>23</td> <td>57</td> <td>05</td> <td>54</td>
</tr>
<tr>
    <td>01</td> <td>70</td> <td>54</td> <td>71</td> <td>83</td> <td>51</td> <td>54</td> <td>69</td> <td>16</td> <td>92</td> <td>33</td> <td>48</td> <td>61</td> <td>43</td> <td>52</td> <td>01</td> <td>89</td> <td>19</td> <td>67</td> <td>48</td>
</tr>
</table><br>

Произведение этих чисел 26 × 63 × 78 × 14 = 1788696.<br>

Каково наибольшее произведение четырех подряд идущих чисел в таблице 20×20, расположенных в любом направлении (вверх, вниз, вправо, влево или по диагонали)?








</p>

    </div>

    <div class="body-content">
        <?php 
            foreach ($matrix as $val) {
                for ($i=0; $i <=20 ; $i++) { 
                    echo $val[$i].'  ';
                }
                echo '<br>';
            }
            echo "<br><br>New matrix:<br><br>"
            /*foreach ($trans as $val) {
                for ($i=0; $i <=20 ; $i++) { 
                    echo $val[$i].'  ';
                }
                echo '<br>';
            }*/
            echo $trans;
        ?>
        

    </div>
</div>
