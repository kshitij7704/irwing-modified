@extends('frontend.partials.app')

@section('content')

<style>
    /* --- General Page & Container Styles --- */
    .tree-container {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .tree-header {
        background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
        color: white;
        padding: 25px 30px;
        font-size: 2.2rem;
        font-weight: 700;
        text-align: center;
        margin: 0;
    }

    .tree-content {
        padding: 30px;
    }

    .breadcrumb-container {
        background: #f8f9fa;
        padding: 15px 30px;
        border-bottom: 1px solid #dee2e6;
    }

    .breadcrumb {
        margin: 0;
        background: transparent;
        font-size: 0.9rem;
    }

    .breadcrumb-item a {
        color: #4a90e2;
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }

    /* --- Node (Accordion) Styles --- */
    .tree-node {
        margin-bottom: 25px;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .tree-node:last-child {
        margin-bottom: 0;
    }
    .tree-node:hover {
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transform: translateY(-2px);
    }

    .node-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 18px 25px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }
    .node-header:hover {
        background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
    }

    .node-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2c3e50;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .node-icon {
        width: 20px;
        height: 20px;
        background: #4a90e2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .node-icon::before {
        content: '';
        width: 8px;
        height: 8px;
        background: white;
        border-radius: 50%;
    }

    .toggle-icon {
        font-size: 1.2rem;
        color: #6c757d;
        transition: transform 0.3s ease;
    }
    .toggle-icon.rotated {
        transform: rotate(90deg);
    }

    .node-content {
        display: none;
        padding: 25px;
        background: white;
        animation: fadeIn 0.4s ease;
    }
    .node-content.show {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* --- IMPROVED: Content-Specific Styles --- */
    .content-section h4 {
        color: #343a40;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .content-section .mandate-intro,
    .content-section .study-period {
        color: #495057;
        font-size: 1.1rem;
        margin-bottom: 15px;
    }
    .content-section .study-period {
        font-style: italic;
    }
    .content-section .mandate-intro strong {
        font-weight: 600;
        color: #212529;
    }

    /* MODIFIED: Sub-heading style for better hierarchy */
    .sub-heading {
        color: #4a90e2;
        font-size: 1.2rem;
        font-weight: 600;
        margin-top: 30px;
        margin-bottom: 15px;
        padding-bottom: 8px;
        border-bottom: 2px solid #e9ecef;
    }

    /* MODIFIED: Default list style for the mandate points */
    .mandate-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .mandate-list li {
        padding: 8px 0 8px 25px;
        border-bottom: 1px solid #f1f3f4;
        color: #495057;
        position: relative;
        line-height: 1.6;
    }
    .mandate-list li::before {
        content: '▸';
        color: #4a90e2;
        font-weight: bold;
        position: absolute;
        left: 0;
        top: 8px;
    }
    .mandate-list li:last-child {
        border-bottom: none;
    }

    /* MODIFIED: New list style for links to avoid double icons */
    .link-list {
        list-style: disc; /* Use standard disc bullets */
        padding-left: 20px;
        margin: 0;
    }
    .link-list li {
        margin-bottom: 8px;
    }
    .external-link {
        color: #4a90e2;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .external-link:hover {
        color: #357abd;
        text-decoration: underline;
    }

    /* MODIFIED: Table styles for cleaner HTML */
    .management-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        font-size: 1rem;
    }
    .management-table th,
    .management-table td {
        padding: 12px 15px;
        border: 1px solid #dee2e6;
        color: #495057;
        text-align: left;
    }
    .management-table th {
        font-weight: 600;
        background-color: #f8f9fa;
    }
</style>

<div class="mb-3 mb-lg-5"></div>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="tree-container">
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">International Forums</li>
                </ol>
            </nav>
        </div>

        <h1 class="tree-header">International Forums</h1>

        <div class="tree-content">
            <div class="tree-node">
                <div class="node-header" onclick="toggleNode('itu-d')">
                    <h3 class="node-title"><span class="node-icon"></span> ITU-D (Development Sector)</h3>
                    <span class="toggle-icon">▶</span>
                </div>
                <div id="itu-d" class="node-content">
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-d-sg1')">
                            <h3 class="node-title"><span class="node-icon"></span> Study Group 1</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-d-sg1" class="node-content">
                            <div class="content-section">
                                <h4>Study Group 1</h4>
                                <p class="mandate-intro"><strong>Enabling environment for the development of telecommunications/ICTs</strong></p>
                                <p class="study-period">Study period: 2022-2025</p>
                                <p>The mandate of STUDY GROUP 1 is:</p>

                                <ul class="mandate-list">
                                    <li>National telecommunication/ICT policy, regulatory, technical and strategy development which best enables countries to benefit from the impetus of telecommunications/ICTs, including, infrastructure supportive of broadband services, cloud computing, network functions virtualization (NFV), consumer protection and future networks as an engine for sustainable growth.</li>
                                    <li>Economic policies and methods of determining costs of services related to national telecommunications/ICTs including facilitating the implementation of the digital economy.</li>
                                    <li>Access to telecommunications/ICTs for rural and remote areas.</li>
                                    <li>National policies, regulations, and strategies for providing access to telecommunications/ICTs in rural and remote areas.</li>
                                    <li>Access to telecommunication/ICT services by persons with disabilities and other persons with specific needs.</li>
                                    <li>Migration and adoption of digital broadcasting and implementation of new services.</li>
                                </ul>

                                <h5 class="sub-heading">Corresponding ITU-D Study Group: Study Group 1</h5>
                                <ul class="link-list">
                                    <li><a href="#" class="external-link">ITU-D Study Group 1 home page</a></li>
                                    <li><a href="#" class="external-link">About Study Group 1</a></li>
                                    <li><a href="#" class="external-link">Scope of Study Group 1</a></li>
                                    <li><a href="#" class="external-link">Questions</a></li>
                                    <li><a href="#" class="external-link">Management Team</a></li>
                                    <li><a href="#" class="external-link">Study Group 1 meeting [28 November - 2 December 2022]</a></li>
                                </ul>

                                <h5 class="sub-heading">Management Group</h5>
                                <table class="management-table">
                                    <tr>
                                        <th>Chairperson</th>
                                        <td>Shri Premjit Lal</td>
                                    </tr>
                                    <tr>
                                        <th>Contact us</th>
                                        <td>premjit.lal@nic.in</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-d-sg2')">
                            <h3 class="node-title"><span class="node-icon"></span> Study Group 2</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-d-sg2" class="node-content">
                             <div class="content-section">
                                <h4>Study Group 2</h4>
                                <p class="mandate-intro"><strong>ICT services and applications for the promotion of sustainable development</strong></p>
                                <p class="study-period">Study period: 2022-2025</p>

                                <p>The mandate of STUDY GROUP 2 on "Digital transformation" is:</p>

                                <ul class="mandate-list">
                                    <li>Services and applications supported by telecommunications/ICTs.</li>
                                    <li>Building confidence and security in the use of ICTs.</li>
                                    <li>The use of telecommunications/ICTs in monitoring and mitigating the impact of climate change particularly on developing countries.</li>
                                    <li>Combating counterfeit telecommunications/ICT devices and combating theft of mobile telecommunication devices.</li>
                                    <li>Implementation of conformance and interoperability testing for telecommunication/ICT devices and equipment.</li>
                                    <li>Human exposure to electromagnetic fields and safe disposal of electronic waste.</li>
                                </ul>

                                <h5 class="sub-heading">Corresponding ITU-D Study Group: Study Group 2</h5>
                                <ul class="link-list">
                                    <li><a href="#" class="external-link">ITU-D Study Group 2 home page</a></li>
                                    <li><a href="#" class="external-link">About Study Group 2</a></li>
                                    <li><a href="#" class="external-link">Scope of Study Group 2</a></li>
                                    <li><a href="#" class="external-link">Questions</a></li>
                                    <li><a href="#" class="external-link">Management Team</a></li>
                                    <li><a href="#" class="external-link">Study Group 2 meeting [5 - 9 December 2022]</a></li>
                                </ul>

                                <h5 class="sub-heading">Management Group</h5>
                                <table class="management-table">
                                    <tr>
                                        <th>Chairperson</th>
                                        <td>Shri Premjit Lal</td>
                                    </tr>
                                    <tr>
                                        <th>Contact us</th>
                                        <td>premjit.lal@nic.in</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tree-node">
                 <div class="node-header" onclick="toggleNode('itu-r')">
                    <h3 class="node-title"><span class="node-icon"></span> ITU-R (Radiocommunication Sector)</h3>
                    <span class="toggle-icon">▶</span>
                </div>
                <div id="itu-r" class="node-content">
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-npc-wrc')">
                            <h3 class="node-title"><span class="node-icon"></span> NPC WRC</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-npc-wrc" class="node-content">
                            <!-- Content for NPC WRC will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg1')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 1</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg1" class="node-content">
                            <!-- Content for NSG 1 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg2')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 2</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg2" class="node-content">
                            <!-- Content for NSG 2 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg3')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 3</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg3" class="node-content">
                            <!-- Content for NSG 3 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg4')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 4</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg4" class="node-content">
                            <!-- Content for NSG 4 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg5')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 5</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg5" class="node-content">
                            <!-- Content for NSG 5 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg6')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 6</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg6" class="node-content">
                            <!-- Content for NSG 6 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-r-nsg7')">
                            <h3 class="node-title"><span class="node-icon"></span> NSG 7</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-r-nsg7" class="node-content">
                            <!-- Content for NSG 7 will be added here -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="tree-node">
                <div class="node-header" onclick="toggleNode('itu-t')">
                    <h3 class="node-title"><span class="node-icon"></span> ITU-T (Telecommunication Standardization Sector)</h3>
                    <span class="toggle-icon">▶</span>
                </div>
                <div id="itu-t" class="node-content">
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg21')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 21</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg21" class="node-content">
                            <!-- Content for NWG 21 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg2')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 2</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg2" class="node-content">
                            <!-- Content for NWG 2 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg3')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 3</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg3" class="node-content">
                            <!-- Content for NWG 3 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg5')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 5</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg5" class="node-content">
                            <!-- Content for NWG 5 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg9')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 9</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg9" class="node-content">
                            <!-- Content for NWG 9 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg11')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 11</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg11" class="node-content">
                            <!-- Content for NWG 11 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg12')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 12</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg12" class="node-content">
                            <!-- Content for NWG 12 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg13')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 13</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg13" class="node-content">
                            <!-- Content for NWG 13 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg15')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 15</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg15" class="node-content">
                            <!-- Content for NWG 15 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg16')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 16</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg16" class="node-content">
                            <!-- Content for NWG 16 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg17')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 17</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg17" class="node-content">
                            <!-- Content for NWG 17 will be added here -->
                        </div>
                    </div>
                    <div class="tree-node">
                        <div class="node-header" onclick="toggleNode('itu-t-nwg20')">
                            <h3 class="node-title"><span class="node-icon"></span> NWG 20</h3>
                            <span class="toggle-icon">▶</span>
                        </div>
                        <div id="itu-t-nwg20" class="node-content">
                            <!-- Content for NWG 20 will be added here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- This script does not need any changes --}}
<script>
function toggleNode(nodeId) {
    const content = document.getElementById(nodeId);
    const header = content.previousElementSibling;
    const icon = header.querySelector('.toggle-icon');

    if (content.classList.contains('show')) {
        content.classList.remove('show');
        icon.classList.remove('rotated');
        icon.textContent = '▶';
    } else {
        // Optional: Close other open nodes in the same level for a true accordion effect
        // const parent = content.parentElement.parentElement;
        // const openNodes = parent.querySelectorAll('.node-content.show');
        // openNodes.forEach(node => {
        //     node.classList.remove('show');
        //     const prevIcon = node.previousElementSibling.querySelector('.toggle-icon');
        //     prevIcon.classList.remove('rotated');
        //     prevIcon.textContent = '▶';
        // });

        content.classList.add('show');
        icon.classList.add('rotated');
        icon.textContent = '▼';
    }
}
</script>