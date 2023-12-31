$(function(e){
  
	/*jvectormap*/
	jQuery('#vmap').vectorMap({
	  map: 'world_en',
	  backgroundColor: 'transparent',
	  color: '#ffffff',
	  hoverOpacity: 0.7,
	  enableZoom: false,
	  showTooltip: true,
	  scaleColors: ['#2737a6', '#c6ccf1'],
	  values: sample_data,
	  normalizeFunction: 'polynomial'
	});
	
		/* leads */
    var ctx = $('#leads');
	ctx.height(230);
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			type: 'line',
			datasets: [{
				label: "Sales",
				data: [253, 256, 395, 204, 251, 458, 364, 145, 156, 250, 253, 278],
				backgroundColor: 'rgba(68, 84, 195,0.1)',
				borderColor: 'rgba(68, 84, 195,0.9)',
				borderWidth: 5,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(68, 84, 195,0.8)',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: true,
					ticks: {
						display: true,
						fontColor: "#8e9cad",
						fontSize: "13",
					},
					scaleLabel: {
						display: true,
						labelString: 'Months',
						fontSize: "15",
						fontColor: "#8e9cad",
					},
					gridLines: {
						display: true,
						drawBorder: false,
						color: 'rgba(193, 184, 184,0.1)',
						zeroLineColor: '#000'
					}
				}],
				yAxes: [{
					display: true,
					ticks: {
						display: true,
						fontColor: "#8e9cad",
						color: 'rgba(193, 184, 184,0.1)',
						fontSize: "13",
						callback: function(value, index, values) {
							return '$' + value;
						},
						maxRotation: 0,
						stepSize: 100,
						min: 0,
						max: 500
					},
					scaleLabel: {
						display: true,
						labelString: 'Revenue',
						fontColor: "#8e9cad",
						fontSize: "15",
					},
					gridLines: {
						display: true,
						drawBorder: false,
						color: 'rgba(193, 184, 184,0)',
						zeroLineColor: 'rgba(193, 184, 184,0.1)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*leads end */

	/* new leads */
    var ctx = $('#new-leads');
	ctx.height(230);
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			type: 'line',
			datasets: [{
				label: "Sales",
				data: [320, 440, 510, 604, 126, 758, 264, 945],
				backgroundColor: 'rgba(68, 84, 195,0.1)',
				borderColor: 'rgba(68, 84, 195,0.9)',
				borderWidth: 5,
				pointStyle: 'circle',
				pointRadius: 0,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgba(68, 84, 195,0.8)',
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(0,0,0,0.9)',
				bodyFontColor: 'rgba(0,0,0,0.9)',
				backgroundColor: '#fff',
				bodyFontFamily: 'Montserrat',
				cornerRadius: 0,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					display: true,
					ticks: {
						display: true,
						fontColor: "#8e9cad",
						fontSize: "13",
					},
					scaleLabel: {
						display: true,
						labelString: 'Months',
						fontSize: "15",
						fontColor: "#8e9cad",
					},
					gridLines: {
						display: true,
						drawBorder: false,
						color: 'rgba(193, 184, 184,0.1)',
						zeroLineColor: '#000'
					}
				}],
				yAxes: [{
					display: true,
					ticks: {
						display: true,
						fontColor: "#8e9cad",
						color: 'rgba(193, 184, 184,0.1)',
						fontSize: "13",
						callback: function(value, index, values) {
							return '$' + value;
						},
						maxRotation: 0,
						stepSize: 50,
						min: 0,
						max: 1000
					},
					scaleLabel: {
						display: true,
						labelString: 'Revenue',
						fontColor: "#8e9cad",
						fontSize: "15",
					},
					gridLines: {
						display: true,
						drawBorder: false,
						color: 'rgba(193, 184, 184,0)',
						zeroLineColor: 'rgba(193, 184, 184,0.1)'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*new leads end */
	
	
	/*sparkline*/
    var randomizeArray = function (arg) {
		var array = arg.slice();
		var currentIndex = array.length,
		temporaryValue, randomIndex;
		while (0 !== currentIndex) {
			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;

			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		}
		return array;
    }
	
	var sparklineData = [0, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];
	//Spark1
    var spark1 = {
      chart: {
        type: 'area',
        height: 60,
		width: 160,
        sparkline: {
          enabled: true
        },
		dropShadow: {
			enabled: true,
			blur: 3,
			opacity: 0.2,
		}
		},
		stroke: {
			show: true,
			curve: 'smooth',
			lineCap: 'butt',
			colors: undefined,
			width: 2,
			dashArray: 0,      
		},
      fill: {
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Total Revenue',
        data: randomizeArray(sparklineData)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#4454c3'],

    }
	var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
    spark1.render();
  
	var sparklineData2 = [0, 45, 93, 53, 61, 27, 54, 43, 19, 46, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27];
	//Spark2
    var spark2 = {
      chart: {
        type: 'area',
        height: 60,
		width: 160,
        sparkline: {
          enabled: true
        },
		dropShadow: {
			enabled: true,
			blur: 3,
			opacity: 0.2,
		}
		},
		stroke: {
			show: true,
			curve: 'smooth',
			lineCap: 'butt',
			colors: undefined,
			width: 2,
			dashArray: 0,      
		},
		fill: {
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Unique Visitors',
        data: randomizeArray(sparklineData2)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#2dce89'],

    }
	var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
    spark2.render();
	
	var sparklineData3 = [0, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46,45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51];
	//Spark3
    var spark3 = {
      chart: {
        type: 'area',
        height: 60,
		width: 160,
        sparkline: {
          enabled: true
        },
		dropShadow: {
			enabled: true,
			blur: 3,
			opacity: 0.2,
		}
		},
		stroke: {
			show: true,
			curve: 'smooth',
			lineCap: 'butt',
			colors: undefined,
			width: 2,
			dashArray: 0,      
		},
		fill: {
        gradient: {
          enabled: false
        }
      },
      series: [{
		name: 'Expenses',
        data: randomizeArray(sparklineData3)
      }],
      yaxis: {
        min: 0
      },
      colors: ['#ff5b51'],

    }
	var spark3 = new ApexCharts(document.querySelector("#spark3"), spark3);
    spark3.render();

	var sparklineData4 = [10, 33, 21, 95, 23, 93, 73, 61, 42, 54, 43, 19, 46,45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51];
	//Spark4
    var spark4 = {
		chart: {
		  type: 'area',
		  height: 60,
		  width: 160,
		  sparkline: {
			enabled: true
		  },
		  dropShadow: {
			  enabled: true,
			  blur: 3,
			  opacity: 0.2,
		  }
		  },
		  stroke: {
			  show: true,
			  curve: 'smooth',
			  lineCap: 'butt',
			  colors: undefined,
			  width: 2,
			  dashArray: 0,      
		  },
		  fill: {
		  gradient: {
			enabled: false
		  }
		},
		series: [{
		  name: 'New Today Revenue',
		  data: randomizeArray(sparklineData4)
		}],
		yaxis: {
		  min: 0
		},
		colors: ['#4454c3'],
  
	  }
	  var spark4 = new ApexCharts(document.querySelector("#spark4"), spark4);
	  spark4.render();


	  var sparklineData5 = [0, 25, 31, 37, 25, 33, 53, 60, 90, 12, 55, 67, 27, 72, 12, 69, 99, 72, 54, 27, 93, 21, 22, 91];
	  //Spark5
	  var spark5 = {
		chart: {
		  type: 'area',
		  height: 60,
		  width: 160,
		  sparkline: {
			enabled: true
		  },
		  dropShadow: {
			  enabled: true,
			  blur: 3,
			  opacity: 0.2,
		  }
		  },
		  stroke: {
			  show: true,
			  curve: 'smooth',
			  lineCap: 'butt',
			  colors: undefined,
			  width: 2,
			  dashArray: 0,      
		  },
		  fill: {
		  gradient: {
			enabled: false
		  }
		},
		series: [{
		  name: 'New Unique Visitors',
		  data: randomizeArray(sparklineData5)
		}],
		yaxis: {
		  min: 0
		},
		colors: ['#2dce89'],
  
	  }
	  var spark5 = new ApexCharts(document.querySelector("#spark5"), spark5);
	  spark5.render();

	  var sparklineData6 = [0, 23, 45, 78, 55, 13, 63, 31, 97, 14, 53, 29, 66, 75, 52, 18, 66, 84, 55, 11, 87, 59, 22, 91];

	  for(var i = 0; i<1000; i++){

	  }
	  //Spark6
	  var spark6 = {
		chart: {
		  type: 'area',
		  height: 60,
		  width: 160,
		  sparkline: {
			enabled: true
		  },
		  dropShadow: {
			  enabled: true,
			  blur: 3,
			  opacity: 0.2,
		  }
		  },
		  stroke: {
			  show: true,
			  curve: 'smooth',
			  lineCap: 'butt',
			  colors: undefined,
			  width: 2,
			  dashArray: 0,      
		  },
		  fill: {
		  gradient: {
			enabled: false
		  }
		},
		series: [{
		  name: 'New Expenses',
		  data: randomizeArray(sparklineData6)
		}],
		yaxis: {
		  min: 0
		},
		colors: ['#ff5b51'],
  
	  }
	  var spark6 = new ApexCharts(document.querySelector("#spark6"), spark6);
	  spark6.render();
	
	/*----P-scrolling JS ----*/
	const ps31 = new PerfectScrollbar('.countryscroll', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	/*-----P-scrolling JS -----*/

	/*----P-scrolling JS ----*/
	const ps32 = new PerfectScrollbar('#scrollbar', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	/*-----P-scrolling JS -----*/

	/*----P-scrolling JS ----*/
	const ps33 = new PerfectScrollbar('#scrollbar2', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	/*-----P-scrolling JS -----*/

	/*----P-scrolling JS ----*/
	const ps34 = new PerfectScrollbar('#scrollbar3', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	/*-----P-scrolling JS -----*/
	
 });